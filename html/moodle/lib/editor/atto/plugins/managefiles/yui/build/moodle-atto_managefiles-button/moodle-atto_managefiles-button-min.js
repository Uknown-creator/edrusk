YUI.add("moodle-atto_managefiles-button",function(a,e){a.namespace("M.atto_managefiles").Button=a.Base.create("button",a.M.editor_atto.EditorPlugin,[],{_currentSelection:null,initializer:function(){if(!this.get("disabled")){var e=this.get("host"),t=this.get("area"),i=e.get("filepickeroptions");i.image&&i.image.itemid&&(t.itemid=i.image.itemid,this.set("area",t),this.addButton({icon:"e/manage_files",callback:this._displayDialogue}))}},_displayDialogue:function(e){var t,i;e.preventDefault(),t=this.getDialogue({headerContent:M.util.get_string("managefiles","atto_managefiles"),width:"800px",focusAfterHide:!0}),(i=a.Node.create("<iframe></iframe>")).setStyles({height:"700px",border:"none",width:"100%"}),i.setAttribute("src",this._getIframeURL()),i.on("load",function(e,t){var i=t.getDOMNode().contentDocument.querySelector("#fitem_id_files_filemanager"),a=setInterval(function(){if(i.querySelector(".fm-loaded")){var e=i.querySelector(".fp-navbar a:not([disabled])");e&&e.focus(),clearInterval(a)}},200)},this,i),t.set("bodyContent",i).show(),this.markUpdated()},_getIframeURL:function(){var e=a.mix({elementid:this.get("host").get("elementid")},this.get("area"));return M.cfg.wwwroot+"/lib/editor/atto/plugins/managefiles/manage.php?"+a.QueryString.stringify(e)}},{ATTRS:{disabled:{value:!0},area:{value:{}}}})},"@VERSION@",{requires:["moodle-editor_atto-plugin"]});