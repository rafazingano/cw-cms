var styleSwitcher={initialized:!1,defaults:{saveToStorage:!0,preserveCookies:!1,colorPrimary:"#0088CC",backgroundColor:"light",headerColor:"light",borderRadius:"4px",layoutStyle:"wide",sidebarColor:"dark",sidebarSize:"md",changeLogo:!0},initialize:function(){var a=this,b=$("html").data("style-switcher-options");this.initialized||(a.options=$.extend({},a.defaults),String.prototype.capitalize=function(){return this.charAt(0).toUpperCase()+this.slice(1)},jQuery.styleSwitcherCachedScript=function(a,b){return b=$.extend(b||{},{dataType:"script",cache:!0,url:a}),jQuery.ajax(b)},null!=$.cookie("borderRadius")&&(a.options.borderRadius=$.cookie("borderRadius")),null!=$.cookie("colorPrimary")&&(a.options.colorPrimary="#"+$.cookie("colorPrimary")),b&&(b=b.replace(/'/g,'"'),a.options=$.extend({},a.options,JSON.parse(b)),a.options.preserveCookies=!0,a.options.saveToStorage=!1),$("head").append($('<link rel="stylesheet">').attr("href","../assets/admin/porto/vendor/style-switcher/style-switcher.css")),$("head").append($('<link rel="stylesheet/less">').attr("href","../assets/admin/porto/vendor/style-switcher/less/skin.less")),$("head").append($('<link rel="stylesheet/less">').attr("href","../assets/admin/porto/vendor/style-switcher/less/extension.less")),$("head").append($('<link rel="stylesheet">').attr("href","../assets/admin/porto/vendor/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css")),$.styleSwitcherCachedScript("../assets/admin/porto/vendor/style-switcher/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js").done(function(c,d){less={async:!0,env:"production",modifyVars:{"@border-radius":a.options.borderRadius,"@color-primary":a.options.colorPrimary}},$.styleSwitcherCachedScript("../assets/admin/porto/vendor/less/less.min.js").done(function(c,d){$.ajax({url:"../assets/admin/porto/vendor/style-switcher/style.switcher.html"}).done(function(c){$("body").append(c),a.container=$("#styleSwitcher"),a.build(),a.events(),b||(null!=$.cookie("layoutStyle")&&(a.options.layoutStyle=$.cookie("layoutStyle")),null!=$.cookie("backgroundColor")&&(a.options.backgroundColor=$.cookie("backgroundColor")),null!=$.cookie("headerColor")&&(a.options.headerColor=$.cookie("headerColor")),null!=$.cookie("sidebarColor")&&(a.options.sidebarColor=$.cookie("sidebarColor")),null!=$.cookie("sidebarSize")&&(a.options.sidebarSize=$.cookie("sidebarSize"))),a.setLayoutStyle(a.options.layoutStyle),a.setBackgroundColor(a.options.backgroundColor),a.setHeaderColor(a.options.headerColor),a.setSidebarColor(a.options.sidebarColor),a.setSidebarSize(a.options.sidebarSize),a.setColors(),a.setBorderRadius(a.options.borderRadius),null==$.cookie("initialized")&&(a.container.find("#styleSwitcherOpen").trigger("click"),$.cookie("initialized",!0)),a.initialized=!0})})}),$.styleSwitcherCachedScript("../assets/admin/porto/vendor/style-switcher/cssbeautify/cssbeautify.js").done(function(a,b){}))},build:function(){var a=this,b=a.container.find(".color-primary input");b.val(a.options.colorPrimary).parent().colorpicker({align:"right",customClass:"style-switcher-color-picker"}),$(".colorpicker").on("mousedown",function(b){b.preventDefault(),a.isChanging=!0}).on("mouseup",function(c){c.preventDefault(),a.isChanging=!1,a.options.colorPrimary=b.val(),a.setColors()}),$(".colorpicker-element input").on("blur",function(c){a.options.colorPrimary=b.val(),a.setColors()}),this.container.find(".options-links.borders a").click(function(b){b.preventDefault(),a.setBorderRadius($(this).attr("data-border-radius"))}),this.container.find(".options-links.background-color a").click(function(b){b.preventDefault(),a.setBackgroundColor($(this).attr("data-background-color"))}),this.container.find(".options-links.header-color a").click(function(b){b.preventDefault(),a.setHeaderColor($(this).attr("data-header-color"))}),this.container.find(".options-links.sidebar-color a").click(function(b){b.preventDefault(),a.setSidebarColor($(this).attr("data-sidebar-color"))}),this.container.find(".options-links.layout a").click(function(b){b.preventDefault(),a.setLayoutStyle($(this).attr("data-layout-type"))}),this.container.find(".options-links.sidebar-size a").click(function(b){b.preventDefault(),a.setSidebarSize($(this).attr("data-sidebar-size"))}),a.container.find(".reset").click(function(b){b.preventDefault(),a.reset()}),a.container.find(".get-css").click(function(b){b.preventDefault(),a.getCss()})},events:function(){var a=this;$("#styleSwitcherOpen").click(function(b){b.preventDefault(),a.container.hasClass("active")?a.container.animate({right:"-"+a.container.width()+"px"},300).removeClass("active"):a.container.animate({right:"0"},300).addClass("active")}),(null!=$.cookie("showSwitcher")||$("body").hasClass("one-page"))&&($("#styleSwitcherOpen").trigger("click"),$.removeCookie("showSwitcher"))},setColors:function(a,b){var c=this;return this.isChanging?!1:(a&&(c.options["color"+b.capitalize()]=a,c.container.find(".color-"+b+" input").val(a)),c.options.preserveCookies||$.cookie("colorPrimary",c.options.colorPrimary.replace("#","")),c.modifyVars(),void this.setLogo())},setBorderRadius:function(a){var b=this;b.options.borderRadius=a,b.options.preserveCookies||$.cookie("borderRadius",a),b.modifyVars();var c=this.container.find(".options-links.borders");c.find(".active").removeClass("active"),c.find("a[data-border-radius="+a+"]").addClass("active"),$.event.trigger({type:"styleSwitcher.setBorderRadius",radius:a})},setBackgroundColor:function(a){var b=this;b.options.preserveCookies||$.cookie("backgroundColor",a),this.options.saveToStorage&&"undefined"!=typeof localStorage&&localStorage.setItem("backgroundColor",a);var c=this.container.find(".options-links.background-color");c.find(".active").removeClass("active"),c.find("a[data-background-color="+a+"]").addClass("active"),"dark"==a?($("html").addClass("dark"),$("#addDarkClassInfo").show()):($("html").removeClass("dark"),$("#addDarkClassInfo").hide()),$.event.trigger({type:"styleSwitcher.setBackgroundColor",color:a}),this.setLogo()},setHeaderColor:function(a){var b=this;b.options.preserveCookies||$.cookie("headerColor",a),this.options.saveToStorage&&"undefined"!=typeof localStorage&&localStorage.setItem("headerColor",a);var c=this.container.find(".options-links.header-color");c.find(".active").removeClass("active"),c.find("a[data-header-color="+a+"]").addClass("active"),"dark"==a?($("html").addClass("header-dark"),$("#addHeaderDarkClassInfo").show()):($("html").removeClass("header-dark"),$("#addHeaderDarkClassInfo").hide()),$.event.trigger({type:"styleSwitcher.setHeaderColor",color:a})},setSidebarColor:function(a){var b=this;b.options.preserveCookies||$.cookie("sidebarColor",a),this.options.saveToStorage&&"undefined"!=typeof localStorage&&localStorage.setItem("sidebarColor",a);var c=this.container.find(".options-links.sidebar-color");c.find(".active").removeClass("active"),c.find("a[data-sidebar-color="+a+"]").addClass("active"),"light"==a?($("html").addClass("sidebar-light"),$("#addSidebarLightClassInfo").show()):($("html").removeClass("sidebar-light"),$("#addSidebarLightClassInfo").hide()),$.event.trigger({type:"styleSwitcher.setSidebarColor",color:a})},setLayoutStyle:function(a,b){var c=this;if(c.options.preserveCookies||$.cookie("layoutStyle",a),this.options.saveToStorage&&"undefined"!=typeof localStorage&&localStorage.setItem("layout",a),b)return $.cookie("showSwitcher",!0),window.location.reload(),!1;var d=this.container.find(".options-links.layout");d.find(".active").removeClass("active"),d.find("a[data-layout-type="+a+"]").addClass("active"),"wide"==a?($("html").removeClass("boxed"),$("#addBoxedClassInfo").hide()):($("html").addClass("boxed").removeClass("fixed"),$("#addBoxedClassInfo").show()),$.event.trigger({type:"styleSwitcher.setLayoutStyle",style:a})},setSidebarSize:function(a){var b=this,c=$("html");b.options.preserveCookies||$.cookie("sidebarSize",a),this.options.saveToStorage&&"undefined"!=typeof localStorage&&localStorage.setItem("sidebarSize",a);var d=this.container.find(".options-links.sidebar-size");switch(d.find(".active").removeClass("active"),d.find("a[data-sidebar-size="+a+"]").addClass("active"),c.removeClass("sidebar-left-xs sidebar-left-sm"),a){case"xs":c.addClass("sidebar-left-xs");break;case"sm":c.addClass("sidebar-left-sm")}$.event.trigger({type:"styleSwitcher.setSidebarSize",color:a})},setLogo:function(a){if(!this.options.changeLogo)return this;var b=$(".header .logo img, .center-sign .logo img");a||("#"+$.cookie("colorPrimary")).toUpperCase()==this.defaults.colorPrimary.toUpperCase()&&"dark"!=$.cookie("backgroundColor")?b.attr("src","../assets/admin/porto/images/logo-default.png"):"dark"==$.cookie("backgroundColor")?b.attr("src","../assets/admin/porto/images/logo-light.png"):b.attr("src","../assets/admin/porto/images/logo.png"),$.event.trigger({type:"styleSwitcher.setLogo"})},modifyVars:function(){var a=this;window.clearTimeout(a.timer),a.timer=window.setTimeout(function(){less.modifyVars({"@border-radius":a.options.borderRadius,"@color-primary":a.options.colorPrimary}),a.options.saveToStorage&&"undefined"!=typeof localStorage&&localStorage.setItem("skin-admin.css",$('style[id^="less:"]').text()),$.event.trigger({type:"styleSwitcher.modifyVars",options:a.options})},300)},reset:function(){$.removeCookie("borderRadius"),$.removeCookie("colorPrimary"),$.removeCookie("backgroundColor"),$.removeCookie("headerColor"),$.removeCookie("layoutStyle"),$.removeCookie("sidebarColor"),$.removeCookie("sidebarSize"),$.cookie("showSwitcher",!0),window.location.reload(),"undefined"!=typeof localStorage&&(localStorage.removeItem("skin-admin.css"),localStorage.removeItem("layout"))},getCss:function(){var a="",b="";$("#getCSSTextarea").text($('style[id$="less-skin"]').text()).focus(function(){var a=$(this);a.select(),a.mouseup(function(){return a.unbind("mouseup"),!1})}),a=$("#getCSSTextarea").text(),$("#getCSSTextarea").text(cssbeautify(a,{indent:"	",autosemicolon:!0})),$("#getCSSTextareaExtension").text($('style[id$="less-extension"]').text()).focus(function(){var a=$(this);a.select(),a.mouseup(function(){return a.unbind("mouseup"),!1})}),b=$("#getCSSTextareaExtension").text(),$("#getCSSTextareaExtension").text(cssbeautify(b,{indent:"	",autosemicolon:!0})),$("#getCSSModal").modal("show")}};styleSwitcher.initialize();