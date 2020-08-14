// <script type="text/javascript">
			try
			{
				//get a reference to the google_ads_iframe parent div
				var w = window;
				var parentDiv = undefined;
				var baseIframe = undefined;
				var windowParentDocument = undefined;
				if (w && w.frameElement)
				{
					if (w.frameElement.id.indexOf('pbSekindo') != -1)
					{
						w = w.parent;
					}
					parentDiv = w.frameElement.parentNode;
					baseIframe = w.frameElement;
				}
				else
				{
					// in case we are implemented directly in page (with no iframe, like app)
					baseIframe = document.createElement('iframe');
					var div0 = document.createElement('div');
					parentDiv = document.createElement('div');
					parentDiv.id = 'primisPlayerContainerDiv';

					baseIframe.marginWidth = '0';
					baseIframe.marginHeight = '0';
					baseIframe.hspace = '0';
					baseIframe.vspace = '0';
					baseIframe.frameBorder = '0';
					baseIframe.scrolling = 'no';
					baseIframe.id = 'google_ads_iframe_dummy_';
					div0.appendChild(parentDiv);
					parentDiv.appendChild(baseIframe);
					document.body.appendChild(div0);
				}
				windowParentDocument = w.parent.document;
			}
			catch (ex){}

            if (false)
			{
				parentDiv.classList.add('cleanslate');
				var rootDocument = parentDiv.ownerDocument;
				var rootWindow = rootDocument.defaultView || rootDocument.parentWindow;

				var css = rootDocument.createElement('link');
				css.setAttribute('rel', 'stylesheet');
				css.setAttribute('type', 'text/css');
				var url = 'https://live.sekindo.com/content/video/css/cleanslate.css';
				css.setAttribute('href', url);
				rootDocument.body.appendChild(css);

				//Hide the google iframe
				baseIframe.style.height = '1px';
				baseIframe.style.width = '1px';
				// fix for space btw the player and iframe
				if (false)
					baseIframe.style.position = 'absolute';

				//Create a div container that holds the player iframe in it
				var containerDiv = baseIframe.ownerDocument.createElement('div');
				containerDiv.id = 'primis_container_div';

				//Create the iframe that will hold the player in it
				var playerIframeDiv = baseIframe.ownerDocument.createElement('div');
				playerIframeDiv.id = 'primis_playerSekindoSPlayer5f36a5ceeb98c';
				playerIframeDiv.style.overflow = 'hidden';
				playerIframeDiv.style.position = 'relative';

				// fix for outstream player blink
				
				parentDiv.insertBefore(containerDiv, baseIframe);
			}
			else
			{
				//Hide the google iframe
				baseIframe.style.height = '1px';
				baseIframe.style.width = '1px';
				// fix for space btw the player and iframe
				if (false)
					baseIframe.style.position = 'absolute';

				//Create a div container that holds the player iframe in it
				var containerDiv = baseIframe.ownerDocument.createElement('div');
				containerDiv.id = 'primis_container_div';

				//Create the iframe that will hold the player in it
				var playerIframe = baseIframe.ownerDocument.createElement('iframe');
				playerIframe.id = 'primis_playerSekindoSPlayer5f36a5ceeb98c';
				playerIframe.title = 'Primis Player Videos';
				playerIframe.style.border = 'none';
				playerIframe.frameborder = '0';
				playerIframe.scrolling = 'no';
				playerIframe.allowtransparency = 'true';
				playerIframe.hspace='0';
				playerIframe.vspace='0';
				playerIframe.style.position = 'relative';
				playerIframe.setAttribute('allowfullscreen', '');
				// fix for outstream player blink
				
				parentDiv.insertBefore(containerDiv, baseIframe);
			}

			// When not native skin, those params should be defined for liveSPlayer
			var nativeSkinIFrameWindow = null;
			var nativeSkinIframe = null;

			var flowCloseBtnIframe = baseIframe.ownerDocument.createElement('iframe');
			flowCloseBtnIframe.id = 'flow_close_btn_iframe';
			flowCloseBtnIframe.title = 'Flow Close Button';
			flowCloseBtnIframe.style.border = 'none';
			flowCloseBtnIframe.frameborder = '0';
			flowCloseBtnIframe.scrolling = 'no';
			flowCloseBtnIframe.allowtransparency = 'true';
			flowCloseBtnIframe.hspace = '0';
			flowCloseBtnIframe.vspace = '0';
			flowCloseBtnIframe.style.position = 'relative';
			flowCloseBtnIframe.style.display = 'none';
			flowCloseBtnIframe.style.backgroundColor = 'rgba(255, 255, 255, 0.0)';
			containerDiv.appendChild(flowCloseBtnIframe);

//<script type="text/javascript">
	//create array of frameElements windows
	var isPrimisNativeSkin = true;
	var isUpdateParentNode = true;
	try
	{
		if (isUpdateParentNode)
		{
			containerDiv.parentNode.parentNode.style.width = '100%';
			containerDiv.parentNode.parentNode.style.height = '100%';
			containerDiv.parentNode.parentNode.style.margin = 'auto';
			containerDiv.parentNode.parentNode.style.display = 'block';
		}
		//We have a preset native skin (inContent, thumbnailSkin, etc)
		// baseIframe is set in liveVideo.php
		if (isPrimisNativeSkin)
		{
			if (false)
			{
				containerDiv.parentNode.parentNode.style.width = '100%';
			}

			//Create the iframe that holds the skin design in it
			nativeSkinIframe = baseIframe.ownerDocument.createElement('iframe');
			nativeSkinIframe.style.border = 'none';
			nativeSkinIframe.style.margin = '0px';
			nativeSkinIframe.style.visibility = 'hidden';
			nativeSkinIframe.scrolling = 'no';
			nativeSkinIframe.frameborder = '0';
			nativeSkinIframe.allowtransparency = 'true';
			nativeSkinIframe.style.position = 'absolute';
			nativeSkinIframe.style.setProperty('z-index', 0, 'important');
			nativeSkinIframe.style.top = '0px';
			nativeSkinIframe.style.left = '0px';
			nativeSkinIframe.id = 'sekindoNativeSkinFrameSekindoSPlayer5f36a5ceeb98c';

            if (false)
			{
				playerIframeDiv.style.setProperty('z-index', 1, 'important');

				containerDiv.style.display = 'block';
				containerDiv.style.zIndex = 'initial';
				containerDiv.style.position = 'relative';
				containerDiv.style.textAlign = 'initial';
				containerDiv.style.margin = '0px';
				containerDiv.style.padding = '0px';
				containerDiv.style.borderWidth = '0px';
				// containerDiv - created in liveVideo, the parent div of skinIframe and playerIframeDiv
				// playerIframeDiv - created in liveVideo, the iframe in which the player is created in
				containerDiv.appendChild(playerIframeDiv);
				containerDiv.appendChild(nativeSkinIframe);

				//Inject the skin design into the skin iframe
				nativeSkinIFrameWindow = nativeSkinIframe.contentWindow || nativeSkinIframe.contentDocument.defaultView;
				nativeSkinIframeDoc = nativeSkinIFrameWindow.document || nativeSkinIFrameWindow.contentDocument;
				nativeSkinIframeDoc.open();
				nativeSkinIframeDoc.write("\n<!--\n\/\/Declerations samples\n$nativeHtml = '{\"skinName\":\"InContentThumbsSkin\"}';\n$nativeHtml = '{\"skinName\": \"InContentThumbsSkin\", \"externalParams\":{\"skinWidth\": 600, \"mainTitle\": \"FEATURED VIDEOS\", \"readMoreText\": \"Watch Video\", \"primisLogoOn\":true, \"showDescription\":false, \"fontLinks\":\"https:\/\/fonts.googleapis.com\/css?family=Karla:400,700|Libre+Baskerville:400,400i,700&subset=latin-ext\", \"titleLinesToCropAfter\":2}}';\n\nconfig.primisSkinParams:\n\/\/Set default params\n        var params = {};\/\/ config object\n        params.mainTitle = \"FEATURED VIDEOS\"; \/\/ String, default is \"FEATURED VIDEOS\" (if not declared), the unit left top side title\n        params.readMoreText = \"Watch Video\"; \/\/ String, default is \"Read More\" (if not declared), empty string will hide read-more element\n        params.primisLogoOn = true; \/\/ Boolean, default is true (if not declared), show or hide the right top side primis logo\n        params.skinWidth = 690; \/\/Integer , default 690 (if not declared), set the skin width if 'isResponsive' set to 'false'. other wize skin width is responsive\n        params.fontLinks = null; \/\/ String, custom font links that will be additionally included at the page\n        params.css = null; \/\/ String, css structure that overrides the current css. an example for background and title colors change '.Large-unit{ background-color: #ff0055; } .main-title{ color: white; }';\n        params.showDescription = false; \/\/Boolean, default is false (if not declared), show video description\n        params.titleLinesToCropAfter = 4; \/\/Integer , default 1 (if not declared), set main title number of lines to be cropped after\n        params.descriptionLinesToCropAfter = 1; \/\/Integer , default 3 (if not declared), set description number of lines to be cropped after\n        params.thumbsColsNum = 1 \/\/Integer , default 1 (if not declared), set number of columns for thumbnails\n        params.evenColsDataType = \"text\";   \/\/String, default is \"text\", (options are: \"text\", \"thumbs\") set even thumbnail column to contain video image or video description\n        params.thumbsColsPosition = \"right\"; \/\/ string, default is right (options are: \"right\", \"left\"), show thumbnails to the right\/left of the player\n-->\n\n<style type=\"text\/css\">\n\n    .tablesDefault\n    {\n        border-collapse: collapse;\n    }\n\n    .contentTd\n    {\n        padding: 0;\n    }\n\n    .Large-unit\n    {\n        display: inline-block;\n        background-color: white;\n        width: 100%;\n    }\n\n    .main-title\n    {\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: bold;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #9b9b9b;\n    }\n\n    .Promoted-by-primis\n    {\n        width: 96.4px;\n        height: 11px;\n        font-family: Roboto;\n        font-size: 10px;\n        font-weight: 500;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #9b9b9b;\n    }\n\n    .thumbnail-read-more\n    {\n        font-family: Roboto;\n        font-size: 10px;\n        font-weight: bold;\n        font-style: italic;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #f2405e;\n        text-decoration: underline;\n    }\n\n    .thumbnail-title\n    {\n        width:130px;\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: bold;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        word-wrap: break-word;\n        color: #062242;\n    }\n\n    .thumbnail-desc\n    {\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: normal;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: 1.25;\n        letter-spacing: 0.1px;\n        word-wrap: break-word;\n        color: #000000;\n    }\n\n    .relatedItemsWrapper::-webkit-scrollbar {\n        display: none;\n    }\n\n    .relatedItemsWrapper {\n        overflow-y: scroll;\n        overflow-x: hidden;\n        scrollbar-width: none; \/* Firefox *\/\n        -ms-overflow-style: none;  \/* IE 10+ *\/\n    }\n    .relatedItemsWrapper::-webkit-scrollbar { \/* WebKit *\/\n        width: 0;\n        height: 0;\n    }\n\n<\/style>\n\n<div id=\"largeUnit\" class=\"Large-unit\">\n    <table id=\"titlesTable\" class=\"tablesDefault\" style=\"width: 100%; \">\n        <tr style=\"height: 20px; border-spacing: 0px;\" valign=\"top\">\n            <td>\n                <div id=\"featuredVideos\" class=\"main-title\"><\/div>\n            <\/td>\n            <td  style=\"text-align: right\">\n                <div id=\"primisLogo\" style=\"margin-right: -2px; display: inline-flex; cursor: pointer;\">\n                    <div id=\"promotedBy\" style=\"position:relative; top: -3px; padding-right: 3px\" class=\"Promoted-by-primis\">Powered by <\/div>\n                    <div id=\"primisLogoImg\" style=\" height: 11px; width: 37px; object-fit: contain;\"><\/div>\n                <\/div>\n            <\/td>\n        <\/tr>\n    <\/table>\n   <table id=\"skinContent\" class=\"tablesDefault\" style=\"width: 100%\">\n        <tr id=\"skinContentTr\"><\/tr>\n    <\/table>\n<\/div>\n\n<script type=\"text\/javascript\">\n    \/\/Add Robotto font\n    var head  = document.getElementsByTagName(\"head\")[0];\n    var link  = document.createElement(\"link\");\n    link.rel  = \"stylesheet\";\n    link.type = \"text\/css\";\n    link.href = \"https:\/\/fonts.googleapis.com\/css?family=Roboto&display=swap\";\n    head.appendChild(link);\n\n    SekindoNativeSkinApi = function(config)\n    {\n        \/\/Set default params\n        var params = {};\/\/ config object\n        params.mainTitle = \"FEATURED VIDEOS\"; \/\/ String, default is \"FEATURED VIDEOS\" (if not declared), the unit left top side title\n        params.readMoreText = \"Watch Video\"; \/\/ String, default is \"Read More\" (if not declared), empty string will hide read-more element\n        params.primisLogoOn = true; \/\/ Boolean, default is true (if not declared), show or hide the right top side primis logo\n        params.skinWidth = 690; \/\/Integer , default 690 (if not declared), set the skin width if 'isResponsive' set to 'false'. other wize skin width is responsive\n\n        params.isResponsive = false;\/\/ Boolean, default is \"false\", if set to \"true\" then the skinWidth is set to '100%'\n        params.fontLinks = null; \/\/ String, custom font links that will be additionally included at the page\n        params.css = null; \/\/ String, css structure that overrides the current css. an example for background and title colors change '.Large-unit{ background-color: #ff0055; } .main-title{ color: white; }';\n        params.showDescription = false; \/\/Boolean, default is false (if not declared), show video description\n        params.titleLinesToCropAfter = 4; \/\/Integer , default 4 (if not declared), set main title number of lines to be cropped after\n        params.descriptionLinesToCropAfter = 1; \/\/Integer , default 1 (if not declared), set description number of lines to be cropped after\n        params.thumbsColsNum = 1; \/\/Integer , default 1 (if not declared), set number of columns for thumbnails\n        params.evenColsDataType = \"text\";   \/\/String, default is \"text\", (options are: \"text\", \"thumbs\") set even thumbnail column to contain video image or video description\n        params.thumbsColsPosition = \"right\"; \/\/ string, default is right (options are: \"right\", \"left\"), show thumbnails to the right\/left of the player\n\n        \/\/Merge current params with external params.\n        params = merge2Objs(params, config.primisSkinParams);\n\n        \/\/Get html elements\n        var largeUnit = document.getElementById(\"largeUnit\");\n        var featuredVideos = document.getElementById(\"featuredVideos\");\n        var titlesTable = document.getElementById(\"titlesTable\");\n        var primisLogo = document.getElementById(\"primisLogo\");\n        var primisLogoImg = document.getElementById(\"primisLogoImg\");\n        var promotedBy = document.getElementById(\"promotedBy\");\n        var skinContentTr = document.getElementById(\"skinContentTr\");\n\n        var playerTd = document.createElement(\"td\");\n        playerTd.className = 'contentTd';\n        playerTd.style.display = 'inline-block';\n        var vidPlaceHolder = document.createElement(\"div\");\n        playerTd.appendChild(vidPlaceHolder);\n        var relatedItemsTd = document.createElement(\"td\");\n        relatedItemsTd.className = \"contentTd\";\n        relatedItemsTd.style.verticalAlign = \"top\";\n\n        var relatedItemsWrapper = document.createElement(\"div\");\n        relatedItemsWrapper.className = 'relatedItemsWrapper'\n        relatedItemsWrapper.style.display = 'inline-block';\n        var relatedItemsTable = document.createElement(\"table\");\n        relatedItemsTable.className = 'tablesDefault';\n        relatedItemsTd.appendChild(relatedItemsWrapper);\n        relatedItemsWrapper.appendChild(relatedItemsTable);\n\n        if (params.thumbsColsPosition == \"right\")\n        {\n            skinContentTr.appendChild(playerTd);\n            skinContentTr.appendChild(relatedItemsTd);\n        }\n        else\n        {\n            skinContentTr.appendChild(relatedItemsTd);\n            skinContentTr.appendChild(playerTd);\n        }\n        vidPlaceHolder.style.width = '100%';\n\n        \/\/Declare vars\n        var strBreakAddedTxt = \"\u2026\";\n        var readMoreAddedTxtOrigin = '';\n        var defaultImgSrc = decodeURI(config.absolutePath+'\/content\/video\/splayer\/assets\/bigPlayBtn.jpg');\n        var clkUrl = \"\";\n        var fileId = '';\n        var rowsArray = []; \/\/ full matrix of contentList*colsNum\n        var currThumbsMatrix = []; \/\/ actual displayed matrix of thumbs\n        var isDisplayMainTitle;\n        var isDisplayReadMore;\n        var thumbsColWidth = 130;\n        var thumbsHeight = 73;\n        var paddingBetweenThumbs = 7;\n        var spaceBetweenPlayerAndRelatedItems = 7;\n        var prevContent;\n        var minPlayerWidth = 300;\n        var actualThumbsColsNum =  params.thumbsColsNum;\n\n        var playBtnSvg = '<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"100%\" height=\"100%\" enable-background=\"new 0 0 494.148 494.148\" viewBox=\"0 0 494.148 494.148\"><path fill=\"#fff\" d=\"M405.284 201.188L130.804 13.28C118.128 4.596 105.356 0 94.74 0 74.216 0 61.52 16.472 61.52 44.044v406.124c0 27.54 12.68 43.98 33.156 43.98 10.632 0 23.2-4.6 35.904-13.308l274.608-187.904c17.66-12.104 27.44-28.392 27.44-45.884.004-17.48-9.664-33.764-27.344-45.864z\"\/><\/svg>';\n        var primisLogoSvg = '<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\"  viewBox=\"0 0 877.5 228.7\" style=\"enable-background:new 0 0 877.5 228.7;\" xml:space=\"preserve\"> <style type=\"text\/css\"> .st0{fill:#022242;} .st1{fill:#FF3E5F;} <\/style> <path class=\"st0\" d=\"M154.2,195H115l29.8-146.3H184l-2.4,11.5c5.4-7.8,16-12.8,29-12.8c24,0,47.4,18.8,47.4,49.4 c0,34.9-30.8,62.4-61.9,62.4c-16.5,0-29.5-5-32-12.8L154.2,195z M192.2,124.1c13.6,0,24.5-10.8,24.5-22.7c0-11-8.5-18.8-20.6-18.8 c-14.3,0-24.7,11-24.7,22.5C171.4,116,179.9,124.1,192.2,124.1L192.2,124.1z\"\/> <path class=\"st0\" d=\"M280.2,48.7h40.1l-2.8,13.4c8.7-12.1,18.2-16,29.9-16c4.4,0,8.9,0.4,13.2,1.2l-7.2,35.7 c-4.7-0.8-9.5-1.1-14.3-1.1c-17.3,0-27.9,12.6-32.3,33.1l-8.9,42.7h-40.1L280.2,48.7z\"\/> <path class=\"st0\" d=\"M374.9,48.7h40.1l-22.3,109.1h-40.1L374.9,48.7z M377.7,24c0-12.6,10.8-24,24.5-24c12.1,0,20.6,8.5,20.6,19.9 c0,12.1-10.4,23.8-24.5,23.8C386.1,43.7,377.7,35.5,377.7,24L377.7,24z\"\/> <path class=\"st0\" d=\"M430.8,48.7h40.1l-2.8,13.4c8-12.1,17.1-16,27.9-16c14.3,0,24.9,6.3,29.2,16.9c9.3-11,23.1-17.2,37.4-16.9 c21.4,0,33.6,14.1,33.6,36.2c0,3.6-0.4,7.3-1.1,10.8l-13.4,64.8h-40.1l12.3-61.1c0.2-1.4,0.4-2.9,0.4-4.3c0-7.6-3.7-12.1-10.6-12.1 c-8.7,0-14.3,7.4-16.5,18l-12.3,59.6H475l12.3-61.1c0.2-1.4,0.4-2.9,0.4-4.3c0-7.6-3.7-12.1-10.6-12.1c-8.7,0-14.3,6.9-16.5,17.5 l-12.1,60h-40.1L430.8,48.7z\"\/> <path class=\"st0\" d=\"M619.7,48.7h40.1l-22.3,109.2h-40.1L619.7,48.7z M622.5,24c0-12.6,10.8-24,24.5-24c12.1,0,20.6,8.5,20.6,19.9 c0,12.1-10.4,23.8-24.5,23.8C631,43.7,622.5,35.5,622.5,24z\"\/> <path class=\"st0\" d=\"M676.1,116.7c7.4,8.7,18.4,10.8,29.9,10.8c9.5,0,12.8-2.4,12.8-5.2c0-4.8-18.4-3.9-32.9-11 c-11.5-5.6-17.5-14.5-17.5-26.9c0-21,20.6-39,48.9-39c16.6-0.1,32.7,5.8,45.3,16.7l-20.1,25.3c-7.4-6.7-17.1-10.4-27.1-10.4 c-7.6,0-10.4,2.8-10.4,5.6c0,5.2,15.2,4.8,33.3,11.9c14.3,5.6,18,16.2,18,27.1c0,24.5-18.8,39.4-54.6,39.4 c-22.7,0-40.1-7.4-50.7-19.7L676.1,116.7z\"\/> <path class=\"st1\" d=\"M81.9,195l-6.9,33.8H0L46.5,0h74.9l-6.9,33.8H77.3L44.6,195H81.9z\"\/> <path class=\"st1\" d=\"M795.6,33.7L802.5,0h74.9L831,228.7H756L763,195h37.3l32.6-161.2L795.6,33.7z\"\/> <\/svg>';\n        var nowPlayingHtml = '<div style=\"width: 70px; text-align: center; text-decoration: none; left: 50%; top: 50%; transform: translate(-50%, -50%); font-size: 11px; display: block; position: absolute; line-height: 12px; letter-spacing: 0.11px; z-index: 100; pointer-events: none; color: white; font-family: Roboto; text-overflow: ellipsis; white-space: nowrap; overflow: hidden; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">NOW <br> PLAYING<\/div>';\n        var coverBoxHtml = '<div style=\"opacity: 1; width: 130px; height: 73px; position: absolute; left: 0px; bottom: 0px; z-index: 1; background-color: rgba(0, 0, 0, 0.4); overflow: hidden; user-select: none; display: block; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\" class=\"\"><\/div>';\n\n        if(params.css)\n        {\n            var style = document.createElement('style');\n            style.type = 'text\/css';\n            style.appendChild(document.createTextNode(params.css));\n            document.body.appendChild(style);\n        }\n        \/\/Add custom font links separated by #!#\n        addCustomFontLinks(params.fontLinks);\n\n        isDisplayMainTitle = getDisplayStateByContent(params.mainTitle);\n        \/\/Set read more text\n        readMoreAddedTxtOrigin  = ' <a class=\"thumbnail-read-more\" style=\"color:'+config.playerTemplateData.designColor+'\" > '+params.readMoreText+'<\/a>';\n        isDisplayReadMore = getDisplayStateByContent(params.readMoreText);\n\n        \/\/Set logo and update it's colors\n        var rgb = getComputedStyle(largeUnit).backgroundColor.match(\/\\d+\/g);\n        var R = parseInt(rgb[0]);\n        var G = parseInt(rgb[1]);\n        var B = parseInt(rgb[2]);\n        var avg = (R+G+B)\/3;\n\n        \/\/White logo\n        if(R > 180 &&  G < 120  && R \/ ((G+B)\/2) > 1.2)\n        {\n            primisLogoSvg = primisLogoSvg.replace('st0{fill:#022242;}', 'st0{fill:#ffffff;}')\n            primisLogoSvg = primisLogoSvg.replace('st1{fill:#FF3E5F;}', 'st1{fill:#ffffff;}')\n        }\n        \/\/Bright logo\n        else if(avg < 150)\n        {\n            primisLogoSvg = primisLogoSvg.replace('st0{fill:#022242;}', 'st0{fill:#ffffff;}')\n        }\n        \/\/White \"Powered by\"\n        if(avg > 115 && avg < 195)\n        {\n            promotedBy.style.color = '#FFF'\n        }\n        primisLogoImg.innerHTML = primisLogoSvg;\n\n        config.nativeSkinType = 'inContentThumbs' + (params.evenColsDataType == \"text\" ? 'Text' : '');\n\n        config.nativeSkinIframe.style.width = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.nativeSkinIframe.style.maxWidth = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.nativeSkinIframe.style.minWidth = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.containerDiv.style.width = params.isResponsive? '100%': params.skinWidth + 'px';\n\n        if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n        {\n            \/\/playerIframeDiv must be absolute to control positions of the player and its thumbs\n            playerIframeDiv.style.position = 'absolute';\n        }\n        else\n        {\n            \/\/playerIframe must be absolute to control positions of the player and its thumbs\n            playerIframe.style.position = 'absolute';\n        }\n\n        \/\/The \"largeUnitWidth\" parameter is used for calculating text lines and position.\n        var largeUnitWidth = config.nativeSkinIframe.clientWidth;\n        function calcPlayerSize()\n        {\n            var skinWidth = params.isResponsive ? largeUnitWidth : params.skinWidth;\n            var relatedItemsWidth = relatedItemsWrapper.offsetWidth;\n            var actualPlayerWidth = updateActualThumbsCols(skinWidth, relatedItemsWidth);\n\n            config.width = config.videoWidth = actualPlayerWidth;\n            config.height = config.videoHeight =  actualPlayerWidth;\n            var val = {responsive: false, width: config.videoWidth, height: config.videoHeight};\n            \/\/ Affecting at floating unit sizes\n            if (!config.flowStatus)\n            {\n                config.bus.triggerNote('requestLayoutResize', val);\n            }\n\n            config.nativeSkinIframe.style.visibility = 'visible';\n            var rect = vidPlaceHolder.getBoundingClientRect();\n\n            relatedItemsWrapper.style.maxWidth = relatedItemsWrapper.style.maxWidth === \"\" ? (relatedItemsWidth) + \"px\" : relatedItemsWrapper.style.maxWidth;\n            \/\/ Affecting at floating unit location\n            if (!config.flowStatus)\n            {\n                if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n                {\n                    playerIframeDiv.style.top  = rect.top + 'px';\n                    playerIframeDiv.style.left = (params.thumbsColsPosition === \"right\" ? rect.left : (parseInt(relatedItemsWrapper.style.maxWidth, 10) + spaceBetweenPlayerAndRelatedItems)) + 'px';\n                }\n                else\n                {\n                    playerIframe.style.top  = rect.top + 'px';\n                    playerIframe.style.left = (params.thumbsColsPosition === \"right\" ? rect.left : (parseInt(relatedItemsWrapper.style.maxWidth, 10) + spaceBetweenPlayerAndRelatedItems)) + 'px';\n                }\n            }\n            relatedItemsWrapper.style.cssFloat = params.thumbsColsPosition;  \/\/ \"right\"\/\"left\"\n        }\n\n        function updateActualThumbsCols(skinWidth, relatedItemsWidth)\n        {\n            var numOfThumbsToChange = 0;\n            var newThumbsColsNum = actualThumbsColsNum;\n            var extraSpace = Math.abs(relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth - skinWidth);\n            var actualPlayerWidth = Math.max(skinWidth - relatedItemsWidth - spaceBetweenPlayerAndRelatedItems, minPlayerWidth);\n\n            \/\/ remove columns - player is minimum width and skin width is not large enough to contain the required thumbsColsNum\n            if (actualPlayerWidth === minPlayerWidth && (relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth > skinWidth))\n            {\n                numOfThumbsToChange = Math.ceil(extraSpace \/ (params.evenColsDataType === \"text\" ? thumbsColWidth * 2 + paddingBetweenThumbs : thumbsColWidth + paddingBetweenThumbs));\n                newThumbsColsNum = actualThumbsColsNum - numOfThumbsToChange;\n            }\n            \/\/ add more columns if we can - skin width is large enough to contain more required thumbs Cols\n            else if (relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth < skinWidth)\n            {\n                numOfThumbsToChange = Math.floor(extraSpace \/ (params.evenColsDataType === \"text\" ? thumbsColWidth * 2 + paddingBetweenThumbs : thumbsColWidth));\n                newThumbsColsNum =  actualThumbsColsNum + numOfThumbsToChange;\n            }\n\n            if (newThumbsColsNum !== actualThumbsColsNum)\n            {\n                newThumbsColsNum = Math.max(newThumbsColsNum, 0);\n                newThumbsColsNum = Math.min(newThumbsColsNum, params.thumbsColsNum);\n                actualThumbsColsNum = newThumbsColsNum;\n                relatedItemsWrapper.style.maxWidth = params.evenColsDataType === \"text\" ? (Math.max(2 * actualThumbsColsNum * (thumbsColWidth + paddingBetweenThumbs) - paddingBetweenThumbs, 0)) + \"px\" :\n                                                                                            (Math.max(actualThumbsColsNum * (thumbsColWidth + paddingBetweenThumbs) - paddingBetweenThumbs, 0)) + \"px\";\n                actualPlayerWidth = skinWidth - parseInt(relatedItemsWrapper.style.maxWidth, 10) - spaceBetweenPlayerAndRelatedItems;\n\n                \/\/ add\/remove columns and rearrange thumbs to fit to the actual thumbs cols num\n                rearrangeThumbs();\n            }\n            return actualPlayerWidth;\n        }\n\n        function rearrangeThumbs()\n        {\n            if (actualThumbsColsNum === 0)\n            {\n                return;\n            }\n            var totalRows = Math.ceil(config.contentPlayList.length \/ actualThumbsColsNum);\n\n            \/\/hide not needed rows\n            for (var h=0;h < config.contentPlayList.length - totalRows ;h++)\n            {\n                showOrHideThumbsRow(totalRows + h, \"hide\");\n            }\n\n            var index = 0;\n            var contentIndex = 0;\n\n            var rows = [];\n            currThumbsMatrix = [];\n            for (var i=0;i<totalRows;i++)\n            {\n                for (var j=0;j<actualThumbsColsNum;j++)\n                {\n                    var thumbUnit = new ThumbnailUnit(index, contentIndex++);\n                    rows.push(rowsArray[index]);\n                    index++;\n                }\n                currThumbsMatrix.push(rows);\n                rows = [];\n                index += params.thumbsColsNum - actualThumbsColsNum;\n\n                showOrHideThumbsRow(i, \"show\");\n            }\n\n            AddNowPlayingLabel(config.currContentIndex);\n        }\n\n        \/\/ operation - show\/hide\n        function showOrHideThumbsRow(rowIndex, operation)\n        {\n            for (var i=0;i < rowsArray.length ;i++)\n            {\n                if (rowsArray[i].rowIndex === rowIndex)\n                {\n                    rowsArray[i].thumbRow.style.display = (operation === \"show\") ? \"block\" : \"none\";\n                }\n            }\n        }\n\n        \/\/Set titles display\n        if (isDisplayMainTitle)\n        {\n            featuredVideos.innerText = (params.mainTitle && params.mainTitle.length)? params.mainTitle : 'FEATURED VIDEOS';\n        }\n        else\n        {\n            featuredVideos.innerText = '';\n        }\n\n        \/\/Set primis logo display\n        if(!params.primisLogoOn && !isDisplayMainTitle)\n        {\n            titlesTable.style.display = 'none';\n        }\n        else if(!params.primisLogoOn)\n        {\n            titlesTable.rows[0].cells[1].style.display = 'none';\n        }\n\n        function addCustomFontLinks(fontLinks)\n        {\n            if(fontLinks)\n            {\n                var linksArray = fontLinks.split(\"#!#\");\n                for (var k = 0; k < linksArray.length; k++)\n                {\n                    var head  = document.getElementsByTagName(\"head\")[0];\n                    var link  = document.createElement(\"link\");\n                    link.rel  = \"stylesheet\";\n                    link.type = \"text\/css\";\n                    link.href = linksArray[k];\n                    head.appendChild(link);\n                }\n            }\n        }\n\n        \/\/Crops the titles and descriptions to fit with requested number of lines\n        function cropTextByLines(obj1, linesNum, innerHtml, addedDots, addedTxt, width)\n        {\n            var strArray = innerHtml.split(\" \");\n\n            \/\/Calculate a single line height and everege letter width\n            obj1.style.width = 'fit-content';\n            obj1.innerHTML = \"WIwaii\";\n            var lineHeight = obj1.clientHeight;\n            var letterWidth = obj1.offsetWidth\/6;\n            var lettersNum = Math.round((width - 20)\/letterWidth);\n\n            obj1.innerHTML = \"\";\n            obj1.style.width = width;\n\n            \/\/Calculate the text height and add only the requiered words\n            for (var i = 0; i < strArray.length; i++)\n            {\n                var tmpArr = strArray.slice(0, (i+1));\n                obj1.innerHTML = tmpArr.join(\" \") + addedDots + addedTxt;\n\n                \/\/Check if we acceded lines height\n                if((lineHeight*linesNum) < obj1.clientHeight)\n                {\n                    var tmpArr = strArray.slice(0, i);\n                    var j = i;\n                    while((lineHeight*linesNum) < obj1.clientHeight)\n                    {\n                        tmpArr = strArray.slice(0, (j--));\n                        var str\n                        if(tmpArr.length)\n                        {\n                            str = tmpArr.join(\" \") + addedDots  + addedTxt;\n                            obj1.innerHTML = str;\n                        }\n                        else\n                        {\n                            var addedStr = addedDots + addedTxt;\n                            var addedTxtLength = addedStr.length;\n                            str = strArray[0].slice(0,(lettersNum - addedTxtLength))+addedStr;\n                            obj1.innerHTML = str;\n\n                            break;\n                        }\n                    }\n                    break;\n                }\n\n                \/\/All sentence is viewable\n                if(i == strArray.length-1)\n                {\n                    obj1.innerHTML = tmpArr.join(\" \") + addedTxt;\n                }\n            }\n        }\n\n        function ThumbnailUnit(i, index)\n        {\n            if (index >= config.contentPlayList.length)\n            {\n                return;\n            }\n\n            var thumbMoreAddedTxt = '';\n            rowsArray[i].imgTd.innerHTML = '';\n\n            if (params.evenColsDataType === \"text\")\n            {\n                rowsArray[i].titleContainer.innerHTML = config.contentPlayList[index].title;\n                if (params.showDescription)\n                {\n                    rowsArray[i].descriptionContainer.innerHTML = config.contentPlayList[index].desc;\n                }\n            }\n\n            var img = new Image(thumbsColWidth, thumbsHeight);\n            img.src = config.contentPlayList[index].bgImg;\n\n            img.style.cursor = \"pointer\";\n            img.onImgError = function ()\n            {\n                \/\/Avoid infinity error loop\n                if(img.isImgError)\n                {\n                    img.parentNode.removeChild(img);\n                    return;\n                }\n                img.isImgError = true;\n                img.src = defaultImgSrc;\n            }\n            img.addEventListener('error', img.onImgError);\n            rowsArray[i].imgTd.appendChild(img);\n\n            \/\/ handle click on read more text\n            rowsArray[i].imgCol.clkUrl = config.contentPlayList[index].clkUrl ? config.contentPlayList[index].clkUrl : \"\";\n            rowsArray[i].imgCol.fileId = config.contentPlayList[index].fileId ? config.contentPlayList[index].clkUrl : \"\";\n\n            if (isDisplayReadMore)\n            {\n                thumbMoreAddedTxt = readMoreAddedTxtOrigin;\n            }\n\n            rowsArray[i].imgCol.onclick = function ()\n            {\n                onVideoClick();\n            }\n            rowsArray[i].txtTd.onclick = function ()\n            {\n                onVideoClick();\n            }\n\n            var onVideoClick = function()\n            {\n                if (config.adIsPlaying)\n                {\n                    return;\n                }\n                config.nextContentIndex = index;\n                config.intentInitiator = 'userSwitchContentFS';\n                config.bus.triggerNote('intentOn');\n                config.bus.triggerNote('onUserEvent', {type: 'onPlay'});\n                config.bus.triggerNote('userSwitchContent');\n            }\n            this.cropTexts = function(){\n                var unitWidth = thumbsColWidth;\n\n                if(config.contentPlayList[index].desc && config.contentPlayList[index].desc.length && params.showDescription)\n                {\n                    cropTextByLines(rowsArray[i].titleContainer, params.descriptionLinesToCropAfter, config.contentPlayList[index].title, strBreakAddedTxt, '', unitWidth);\n                    cropTextByLines(rowsArray[i].descriptionContainer, (params.titleLinesToCropAfter - 1), config.contentPlayList[index].desc, strBreakAddedTxt, thumbMoreAddedTxt, unitWidth);\n                }\n                else\n                {\n                    cropTextByLines(rowsArray[i].titleContainer, params.titleLinesToCropAfter, config.contentPlayList[index].title, strBreakAddedTxt, thumbMoreAddedTxt, unitWidth);\n                }\n            }\n            if (params.evenColsDataType === \"text\")\n            {\n                this.cropTexts();\n            }\n        }\n\n        function AddNowPlayingLabel(currVideoIndex)\n        {\n            if (currVideoIndex === undefined || actualThumbsColsNum === 0)\n            {\n                return;\n            }\n            var row = Math.floor((currVideoIndex) \/ actualThumbsColsNum);\n            var col = currVideoIndex - row * actualThumbsColsNum;\n\n            \/\/remove now playing label from previous video\n            if (prevContent)\n            {\n                prevContent[\"nowPlayingDiv\"].style.display = \"none\";\n            }\n            \/\/add now playing label to current video\n\t        currThumbsMatrix[row][col][\"nowPlayingDiv\"].style.display = config.playerTemplateData.isShowPlaylistNowPlaying == 1 ? \"block\" : \"none\";\n            prevContent = currThumbsMatrix[row][col];\n        }\n\n        function generateThums()\n        {\n            rowsArray = [];\n\n            var totalRows = config.contentPlayList.length;\n\n            \/\/Generate thumbs HTML objects\n            for (var i = 0; i < totalRows; i++)\n            {\n                \/\/ Create an empty <tr> element and add it to the 1st position of the table:\n                var row = relatedItemsTable.insertRow(i);\n                var totalRowCells = actualThumbsColsNum * 2;\n                var rows = [];\n\n                for (var j = 0; j < totalRowCells; j+=2)\n                {\n                    var cellj = row.insertCell(j);\n                    var cellj2 = row.insertCell(j+1);\n\n                    cellj.className = \"contentTd\";\n                    cellj2.className = \"contentTd\";\n\n                    var txtContainer = document.createElement('div');\n                    var titleContainer = document.createElement('div');\n                    var descriptionContainer = document.createElement('div');\n\n                    var imgContainerDiv = document.createElement('div');\n                    imgContainerDiv.style.position = 'relative';\n                    imgContainerDiv.style.width = thumbsColWidth + \"px\";\n                    var imgDiv = document.createElement('div');\n\n\n                    var nowPlayingDiv = document.createElement('div');\n                    nowPlayingDiv.innerHTML = nowPlayingHtml;\n                    var coverBoxDiv = document.createElement('div');\n                    coverBoxDiv.innerHTML = coverBoxHtml;\n                    nowPlayingDiv.appendChild(coverBoxDiv);\n                    nowPlayingDiv.style.display = \"none\";\n                    imgContainerDiv.appendChild(nowPlayingDiv);\n\n                    var playBtnDiv = document.createElement('div');\n                    playBtnDiv.innerHTML = playBtnSvg;\n                    playBtnDiv.style.position = 'absolute';\n                    playBtnDiv.style.width = '25px';\n                    playBtnDiv.style.height = '25px';\n                    playBtnDiv.style.top = '50%';\n                    playBtnDiv.style.left = '50%';\n                    playBtnDiv.style.transform = 'translate(-50%, -50%)';\n                    playBtnDiv.style.pointerEvents = 'none';\n\n                    titleContainer.classList.add(\"thumbnail-title\");\n                    descriptionContainer.classList.add(\"thumbnail-desc\");\n                    txtContainer.appendChild(titleContainer)\n                    txtContainer.appendChild(descriptionContainer)\n                    imgContainerDiv.appendChild(imgDiv)\n                    imgContainerDiv.appendChild(playBtnDiv)\n                    cellj.appendChild(imgContainerDiv)\n\n                    cellj.style.paddingRight = paddingBetweenThumbs + \"px\";\n                    cellj2.style.paddingRight = paddingBetweenThumbs + \"px\";\n\n                    if (params.evenColsDataType === \"thumbs\" && j === totalRowCells-2)\n                    {\n                        \/\/ last column has no padding to the right\n                        cellj.style.paddingRight = \"0px\";\n                    }\n\n                    txtContainer.style.cursor = \"pointer\";\n                    txtContainer.style.width = thumbsColWidth + \"px\";\n                    txtContainer.style.height = thumbsHeight + \"px\";\n\n                    if (i !== (totalRows-1))\n                    {\n                        cellj.style.paddingBottom = paddingBetweenThumbs + \"px\";\n                        cellj2.style.paddingBottom = paddingBetweenThumbs + \"px\";\n                    }\n\n                    cellj2.appendChild(txtContainer);\n\n                    if (params.evenColsDataType === \"thumbs\")\n                    {\n                        cellj2.style.display = \"none\";\n                    }\n                    var thumbObj = {imgTd:imgDiv, playBtn:playBtnDiv, imgCol:cellj, txtTd:cellj2, txtContainer:txtContainer, titleContainer:titleContainer, descriptionContainer:descriptionContainer,\n                        nowPlayingDiv:nowPlayingDiv, thumbRow:row, rowIndex:i};\n\n                    rowsArray.push(thumbObj);\n                    rows.push(thumbObj);\n\n                }\n                currThumbsMatrix.push(rows);\n            }\n\n            \/\/set thumbnails actual content\n            for (i = 0; i < config.contentPlayList.length; i++)\n            {\n                var thumbUnit = new ThumbnailUnit(i, 0);\n            }\n        }\n\n        generateThums();\n        \/\/Timeout is needed for IE that haz a delay in rendering the HTML\n        setTimeout(function()\n        {\n\n            calcPlayerSize();\n            rearrangeThumbs();\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n            AddNowPlayingLabel(config.currContentIndex);\n        },10);\n\n\n        \/\/Size change detector\n        setInterval(function ()\n        {\n            if (largeUnitWidth != config.containerDiv.clientWidth && !config.FSservice.isFullscreen)\n            {\n                largeUnitWidth = config.containerDiv.clientWidth;\n                calcPlayerSize();\n            }\n        }, 10);\n\n        \/\/Objects merging func\n        function merge2Objs(obj, src)\n        {\n            for (var key in src)\n            {\n                if (src.hasOwnProperty(key))\n                {\n                    obj[key] = src[key];\n                }\n            }\n            return obj;\n        }\n\n        function getDisplayStateByContent(paramsField)\n        {\n            return (paramsField.trim().length == 0) ? false : true;\n        }\n\n        config.bus.addCallBack(\"adStarted\", function(val)\n        {\n            config.nativeSkinIframe.style.opacity = '0.3';\n        });\n        config.bus.addCallBack(\"adCompleted\", function(val)\n        {\n            config.nativeSkinIframe.style.opacity = '1';\n            config.nativeSkinIframe.style.backfaceVisibility = 'hidden'; \/\/ needed for chrome opacity transitions\n        });\n\n        config.bus.addCallBack(\"onNextContentInited\", function(val)\n        {\n            clkUrl = '';\n            fileId = '';\n            AddNowPlayingLabel(config.currContentIndex);\n            if (getDisplayStateByContent(config.playerTemplateData.goToArticleText) &&\n                val.content.clkUrl && val.content.clkUrl.length)\n            {\n                clkUrl = val.content.clkUrl;\n                fileId = val.content.fileId;\n            }\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n        });\n\n        \/\/ for correct positioning in flow\n        config.bus.addCallBack(\"onFlowStatusChange\", function(val)\n        {\n            if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n            {\n                playerIframeDiv.style.top = 'auto';\n                playerIframeDiv.style.left = 'auto';\n\n                setTimeout(function()\n                {\n                    if(!val)\n                    {\n                        \/\/ reset absolute position of the player in skin when return from flow\n                        playerIframeDiv.style.zIndex = 1;\n                        var rect = vidPlaceHolder.getBoundingClientRect();\n                        playerIframeDiv.style.top = rect.top+'px';\n                        playerIframeDiv.style.left = rect.left+'px';\n                        playerIframeDiv.style.position = 'absolute';\n                    }\n                },1)\n            }\n            else\n            {\n                playerIframe.style.top = 'auto';\n                playerIframe.style.left = 'auto';\n\n                setTimeout(function()\n                {\n                    if(!val)\n                    {\n                        \/\/ reset absolute position of the player in skin when return from flow\n                        playerIframe.style.zIndex = 1;\n                        var rect = vidPlaceHolder.getBoundingClientRect();\n                        playerIframe.style.top = rect.top+'px';\n                        playerIframe.style.left = rect.left+'px';\n                        playerIframe.style.position = 'absolute';\n                    }\n                },1)\n            }\n        });\n\n\n        config.bus.addCallBack(\"onPlayerResize\", function(val)\n        {\n            if(config.flowStatus || config.FSservice.isFullscreen)return;\n            vidPlaceHolder.style.width = val.playerWidth +'px';\n            vidPlaceHolder.style.height = val.playerHeight +'px';\n\n            \/\/ need to first limit relatedItems height and only then update nativeSkinIframe height with the updated height of largeUnit\n            relatedItemsWrapper.style.maxHeight = val.playerHeight + \"px\";\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n        });\n\n        primisLogo.onclick = function()\n        {\n            window.top.open('https:\/\/www.primis.tech?utm_source='+config.domain+'&utm_medium='+config.nativeSkinType+'&utm_campaign=promoted', \"_blank\");\n        }\n\n    }\n<\/script>");
				nativeSkinIframeDoc.close();
				nativeSkinIFrameWindow.playerIframeDiv = playerIframeDiv;
				nativeSkinIframeDoc.body.style.padding = 0;
				nativeSkinIframeDoc.body.style.margin = 0;
			}
			else
			{
				playerIframe.style.setProperty('z-index', 1, 'important');

				containerDiv.style.display = 'block';
				containerDiv.style.zIndex = 'initial';
				containerDiv.style.position = 'relative';
				containerDiv.style.textAlign = 'initial';
				containerDiv.style.margin = '0px';
				containerDiv.style.padding = '0px';
				containerDiv.style.borderWidth = '0px';
				// containerDiv - created in liveVideo, the parent div of skinIframe and playerIframe
				// playerIframe - created in liveVideo, the iframe in which the player is created in
				containerDiv.appendChild(playerIframe);
				containerDiv.appendChild(nativeSkinIframe);

				//Inject the skin design into the skin iframe
				nativeSkinIFrameWindow = nativeSkinIframe.contentWindow || nativeSkinIframe.contentDocument.defaultView;
				nativeSkinIframeDoc = nativeSkinIFrameWindow.document || nativeSkinIFrameWindow.contentDocument;
				nativeSkinIframeDoc.open();
				nativeSkinIframeDoc.write("\n<!--\n\/\/Declerations samples\n$nativeHtml = '{\"skinName\":\"InContentThumbsSkin\"}';\n$nativeHtml = '{\"skinName\": \"InContentThumbsSkin\", \"externalParams\":{\"skinWidth\": 600, \"mainTitle\": \"FEATURED VIDEOS\", \"readMoreText\": \"Watch Video\", \"primisLogoOn\":true, \"showDescription\":false, \"fontLinks\":\"https:\/\/fonts.googleapis.com\/css?family=Karla:400,700|Libre+Baskerville:400,400i,700&subset=latin-ext\", \"titleLinesToCropAfter\":2}}';\n\nconfig.primisSkinParams:\n\/\/Set default params\n        var params = {};\/\/ config object\n        params.mainTitle = \"FEATURED VIDEOS\"; \/\/ String, default is \"FEATURED VIDEOS\" (if not declared), the unit left top side title\n        params.readMoreText = \"Watch Video\"; \/\/ String, default is \"Read More\" (if not declared), empty string will hide read-more element\n        params.primisLogoOn = true; \/\/ Boolean, default is true (if not declared), show or hide the right top side primis logo\n        params.skinWidth = 690; \/\/Integer , default 690 (if not declared), set the skin width if 'isResponsive' set to 'false'. other wize skin width is responsive\n        params.fontLinks = null; \/\/ String, custom font links that will be additionally included at the page\n        params.css = null; \/\/ String, css structure that overrides the current css. an example for background and title colors change '.Large-unit{ background-color: #ff0055; } .main-title{ color: white; }';\n        params.showDescription = false; \/\/Boolean, default is false (if not declared), show video description\n        params.titleLinesToCropAfter = 4; \/\/Integer , default 1 (if not declared), set main title number of lines to be cropped after\n        params.descriptionLinesToCropAfter = 1; \/\/Integer , default 3 (if not declared), set description number of lines to be cropped after\n        params.thumbsColsNum = 1 \/\/Integer , default 1 (if not declared), set number of columns for thumbnails\n        params.evenColsDataType = \"text\";   \/\/String, default is \"text\", (options are: \"text\", \"thumbs\") set even thumbnail column to contain video image or video description\n        params.thumbsColsPosition = \"right\"; \/\/ string, default is right (options are: \"right\", \"left\"), show thumbnails to the right\/left of the player\n-->\n\n<style type=\"text\/css\">\n\n    .tablesDefault\n    {\n        border-collapse: collapse;\n    }\n\n    .contentTd\n    {\n        padding: 0;\n    }\n\n    .Large-unit\n    {\n        display: inline-block;\n        background-color: white;\n        width: 100%;\n    }\n\n    .main-title\n    {\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: bold;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #9b9b9b;\n    }\n\n    .Promoted-by-primis\n    {\n        width: 96.4px;\n        height: 11px;\n        font-family: Roboto;\n        font-size: 10px;\n        font-weight: 500;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #9b9b9b;\n    }\n\n    .thumbnail-read-more\n    {\n        font-family: Roboto;\n        font-size: 10px;\n        font-weight: bold;\n        font-style: italic;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #f2405e;\n        text-decoration: underline;\n    }\n\n    .thumbnail-title\n    {\n        width:130px;\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: bold;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        word-wrap: break-word;\n        color: #062242;\n    }\n\n    .thumbnail-desc\n    {\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: normal;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: 1.25;\n        letter-spacing: 0.1px;\n        word-wrap: break-word;\n        color: #000000;\n    }\n\n    .relatedItemsWrapper::-webkit-scrollbar {\n        display: none;\n    }\n\n    .relatedItemsWrapper {\n        overflow-y: scroll;\n        overflow-x: hidden;\n        scrollbar-width: none; \/* Firefox *\/\n        -ms-overflow-style: none;  \/* IE 10+ *\/\n    }\n    .relatedItemsWrapper::-webkit-scrollbar { \/* WebKit *\/\n        width: 0;\n        height: 0;\n    }\n\n<\/style>\n\n<div id=\"largeUnit\" class=\"Large-unit\">\n    <table id=\"titlesTable\" class=\"tablesDefault\" style=\"width: 100%; \">\n        <tr style=\"height: 20px; border-spacing: 0px;\" valign=\"top\">\n            <td>\n                <div id=\"featuredVideos\" class=\"main-title\"><\/div>\n            <\/td>\n            <td  style=\"text-align: right\">\n                <div id=\"primisLogo\" style=\"margin-right: -2px; display: inline-flex; cursor: pointer;\">\n                    <div id=\"promotedBy\" style=\"position:relative; top: -3px; padding-right: 3px\" class=\"Promoted-by-primis\">Powered by <\/div>\n                    <div id=\"primisLogoImg\" style=\" height: 11px; width: 37px; object-fit: contain;\"><\/div>\n                <\/div>\n            <\/td>\n        <\/tr>\n    <\/table>\n   <table id=\"skinContent\" class=\"tablesDefault\" style=\"width: 100%\">\n        <tr id=\"skinContentTr\"><\/tr>\n    <\/table>\n<\/div>\n\n<script type=\"text\/javascript\">\n    \/\/Add Robotto font\n    var head  = document.getElementsByTagName(\"head\")[0];\n    var link  = document.createElement(\"link\");\n    link.rel  = \"stylesheet\";\n    link.type = \"text\/css\";\n    link.href = \"https:\/\/fonts.googleapis.com\/css?family=Roboto&display=swap\";\n    head.appendChild(link);\n\n    SekindoNativeSkinApi = function(config)\n    {\n        \/\/Set default params\n        var params = {};\/\/ config object\n        params.mainTitle = \"FEATURED VIDEOS\"; \/\/ String, default is \"FEATURED VIDEOS\" (if not declared), the unit left top side title\n        params.readMoreText = \"Watch Video\"; \/\/ String, default is \"Read More\" (if not declared), empty string will hide read-more element\n        params.primisLogoOn = true; \/\/ Boolean, default is true (if not declared), show or hide the right top side primis logo\n        params.skinWidth = 690; \/\/Integer , default 690 (if not declared), set the skin width if 'isResponsive' set to 'false'. other wize skin width is responsive\n\n        params.isResponsive = false;\/\/ Boolean, default is \"false\", if set to \"true\" then the skinWidth is set to '100%'\n        params.fontLinks = null; \/\/ String, custom font links that will be additionally included at the page\n        params.css = null; \/\/ String, css structure that overrides the current css. an example for background and title colors change '.Large-unit{ background-color: #ff0055; } .main-title{ color: white; }';\n        params.showDescription = false; \/\/Boolean, default is false (if not declared), show video description\n        params.titleLinesToCropAfter = 4; \/\/Integer , default 4 (if not declared), set main title number of lines to be cropped after\n        params.descriptionLinesToCropAfter = 1; \/\/Integer , default 1 (if not declared), set description number of lines to be cropped after\n        params.thumbsColsNum = 1; \/\/Integer , default 1 (if not declared), set number of columns for thumbnails\n        params.evenColsDataType = \"text\";   \/\/String, default is \"text\", (options are: \"text\", \"thumbs\") set even thumbnail column to contain video image or video description\n        params.thumbsColsPosition = \"right\"; \/\/ string, default is right (options are: \"right\", \"left\"), show thumbnails to the right\/left of the player\n\n        \/\/Merge current params with external params.\n        params = merge2Objs(params, config.primisSkinParams);\n\n        \/\/Get html elements\n        var largeUnit = document.getElementById(\"largeUnit\");\n        var featuredVideos = document.getElementById(\"featuredVideos\");\n        var titlesTable = document.getElementById(\"titlesTable\");\n        var primisLogo = document.getElementById(\"primisLogo\");\n        var primisLogoImg = document.getElementById(\"primisLogoImg\");\n        var promotedBy = document.getElementById(\"promotedBy\");\n        var skinContentTr = document.getElementById(\"skinContentTr\");\n\n        var playerTd = document.createElement(\"td\");\n        playerTd.className = 'contentTd';\n        playerTd.style.display = 'inline-block';\n        var vidPlaceHolder = document.createElement(\"div\");\n        playerTd.appendChild(vidPlaceHolder);\n        var relatedItemsTd = document.createElement(\"td\");\n        relatedItemsTd.className = \"contentTd\";\n        relatedItemsTd.style.verticalAlign = \"top\";\n\n        var relatedItemsWrapper = document.createElement(\"div\");\n        relatedItemsWrapper.className = 'relatedItemsWrapper'\n        relatedItemsWrapper.style.display = 'inline-block';\n        var relatedItemsTable = document.createElement(\"table\");\n        relatedItemsTable.className = 'tablesDefault';\n        relatedItemsTd.appendChild(relatedItemsWrapper);\n        relatedItemsWrapper.appendChild(relatedItemsTable);\n\n        if (params.thumbsColsPosition == \"right\")\n        {\n            skinContentTr.appendChild(playerTd);\n            skinContentTr.appendChild(relatedItemsTd);\n        }\n        else\n        {\n            skinContentTr.appendChild(relatedItemsTd);\n            skinContentTr.appendChild(playerTd);\n        }\n        vidPlaceHolder.style.width = '100%';\n\n        \/\/Declare vars\n        var strBreakAddedTxt = \"\u2026\";\n        var readMoreAddedTxtOrigin = '';\n        var defaultImgSrc = decodeURI(config.absolutePath+'\/content\/video\/splayer\/assets\/bigPlayBtn.jpg');\n        var clkUrl = \"\";\n        var fileId = '';\n        var rowsArray = []; \/\/ full matrix of contentList*colsNum\n        var currThumbsMatrix = []; \/\/ actual displayed matrix of thumbs\n        var isDisplayMainTitle;\n        var isDisplayReadMore;\n        var thumbsColWidth = 130;\n        var thumbsHeight = 73;\n        var paddingBetweenThumbs = 7;\n        var spaceBetweenPlayerAndRelatedItems = 7;\n        var prevContent;\n        var minPlayerWidth = 300;\n        var actualThumbsColsNum =  params.thumbsColsNum;\n\n        var playBtnSvg = '<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"100%\" height=\"100%\" enable-background=\"new 0 0 494.148 494.148\" viewBox=\"0 0 494.148 494.148\"><path fill=\"#fff\" d=\"M405.284 201.188L130.804 13.28C118.128 4.596 105.356 0 94.74 0 74.216 0 61.52 16.472 61.52 44.044v406.124c0 27.54 12.68 43.98 33.156 43.98 10.632 0 23.2-4.6 35.904-13.308l274.608-187.904c17.66-12.104 27.44-28.392 27.44-45.884.004-17.48-9.664-33.764-27.344-45.864z\"\/><\/svg>';\n        var primisLogoSvg = '<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\"  viewBox=\"0 0 877.5 228.7\" style=\"enable-background:new 0 0 877.5 228.7;\" xml:space=\"preserve\"> <style type=\"text\/css\"> .st0{fill:#022242;} .st1{fill:#FF3E5F;} <\/style> <path class=\"st0\" d=\"M154.2,195H115l29.8-146.3H184l-2.4,11.5c5.4-7.8,16-12.8,29-12.8c24,0,47.4,18.8,47.4,49.4 c0,34.9-30.8,62.4-61.9,62.4c-16.5,0-29.5-5-32-12.8L154.2,195z M192.2,124.1c13.6,0,24.5-10.8,24.5-22.7c0-11-8.5-18.8-20.6-18.8 c-14.3,0-24.7,11-24.7,22.5C171.4,116,179.9,124.1,192.2,124.1L192.2,124.1z\"\/> <path class=\"st0\" d=\"M280.2,48.7h40.1l-2.8,13.4c8.7-12.1,18.2-16,29.9-16c4.4,0,8.9,0.4,13.2,1.2l-7.2,35.7 c-4.7-0.8-9.5-1.1-14.3-1.1c-17.3,0-27.9,12.6-32.3,33.1l-8.9,42.7h-40.1L280.2,48.7z\"\/> <path class=\"st0\" d=\"M374.9,48.7h40.1l-22.3,109.1h-40.1L374.9,48.7z M377.7,24c0-12.6,10.8-24,24.5-24c12.1,0,20.6,8.5,20.6,19.9 c0,12.1-10.4,23.8-24.5,23.8C386.1,43.7,377.7,35.5,377.7,24L377.7,24z\"\/> <path class=\"st0\" d=\"M430.8,48.7h40.1l-2.8,13.4c8-12.1,17.1-16,27.9-16c14.3,0,24.9,6.3,29.2,16.9c9.3-11,23.1-17.2,37.4-16.9 c21.4,0,33.6,14.1,33.6,36.2c0,3.6-0.4,7.3-1.1,10.8l-13.4,64.8h-40.1l12.3-61.1c0.2-1.4,0.4-2.9,0.4-4.3c0-7.6-3.7-12.1-10.6-12.1 c-8.7,0-14.3,7.4-16.5,18l-12.3,59.6H475l12.3-61.1c0.2-1.4,0.4-2.9,0.4-4.3c0-7.6-3.7-12.1-10.6-12.1c-8.7,0-14.3,6.9-16.5,17.5 l-12.1,60h-40.1L430.8,48.7z\"\/> <path class=\"st0\" d=\"M619.7,48.7h40.1l-22.3,109.2h-40.1L619.7,48.7z M622.5,24c0-12.6,10.8-24,24.5-24c12.1,0,20.6,8.5,20.6,19.9 c0,12.1-10.4,23.8-24.5,23.8C631,43.7,622.5,35.5,622.5,24z\"\/> <path class=\"st0\" d=\"M676.1,116.7c7.4,8.7,18.4,10.8,29.9,10.8c9.5,0,12.8-2.4,12.8-5.2c0-4.8-18.4-3.9-32.9-11 c-11.5-5.6-17.5-14.5-17.5-26.9c0-21,20.6-39,48.9-39c16.6-0.1,32.7,5.8,45.3,16.7l-20.1,25.3c-7.4-6.7-17.1-10.4-27.1-10.4 c-7.6,0-10.4,2.8-10.4,5.6c0,5.2,15.2,4.8,33.3,11.9c14.3,5.6,18,16.2,18,27.1c0,24.5-18.8,39.4-54.6,39.4 c-22.7,0-40.1-7.4-50.7-19.7L676.1,116.7z\"\/> <path class=\"st1\" d=\"M81.9,195l-6.9,33.8H0L46.5,0h74.9l-6.9,33.8H77.3L44.6,195H81.9z\"\/> <path class=\"st1\" d=\"M795.6,33.7L802.5,0h74.9L831,228.7H756L763,195h37.3l32.6-161.2L795.6,33.7z\"\/> <\/svg>';\n        var nowPlayingHtml = '<div style=\"width: 70px; text-align: center; text-decoration: none; left: 50%; top: 50%; transform: translate(-50%, -50%); font-size: 11px; display: block; position: absolute; line-height: 12px; letter-spacing: 0.11px; z-index: 100; pointer-events: none; color: white; font-family: Roboto; text-overflow: ellipsis; white-space: nowrap; overflow: hidden; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">NOW <br> PLAYING<\/div>';\n        var coverBoxHtml = '<div style=\"opacity: 1; width: 130px; height: 73px; position: absolute; left: 0px; bottom: 0px; z-index: 1; background-color: rgba(0, 0, 0, 0.4); overflow: hidden; user-select: none; display: block; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\" class=\"\"><\/div>';\n\n        if(params.css)\n        {\n            var style = document.createElement('style');\n            style.type = 'text\/css';\n            style.appendChild(document.createTextNode(params.css));\n            document.body.appendChild(style);\n        }\n        \/\/Add custom font links separated by #!#\n        addCustomFontLinks(params.fontLinks);\n\n        isDisplayMainTitle = getDisplayStateByContent(params.mainTitle);\n        \/\/Set read more text\n        readMoreAddedTxtOrigin  = ' <a class=\"thumbnail-read-more\" style=\"color:'+config.playerTemplateData.designColor+'\" > '+params.readMoreText+'<\/a>';\n        isDisplayReadMore = getDisplayStateByContent(params.readMoreText);\n\n        \/\/Set logo and update it's colors\n        var rgb = getComputedStyle(largeUnit).backgroundColor.match(\/\\d+\/g);\n        var R = parseInt(rgb[0]);\n        var G = parseInt(rgb[1]);\n        var B = parseInt(rgb[2]);\n        var avg = (R+G+B)\/3;\n\n        \/\/White logo\n        if(R > 180 &&  G < 120  && R \/ ((G+B)\/2) > 1.2)\n        {\n            primisLogoSvg = primisLogoSvg.replace('st0{fill:#022242;}', 'st0{fill:#ffffff;}')\n            primisLogoSvg = primisLogoSvg.replace('st1{fill:#FF3E5F;}', 'st1{fill:#ffffff;}')\n        }\n        \/\/Bright logo\n        else if(avg < 150)\n        {\n            primisLogoSvg = primisLogoSvg.replace('st0{fill:#022242;}', 'st0{fill:#ffffff;}')\n        }\n        \/\/White \"Powered by\"\n        if(avg > 115 && avg < 195)\n        {\n            promotedBy.style.color = '#FFF'\n        }\n        primisLogoImg.innerHTML = primisLogoSvg;\n\n        config.nativeSkinType = 'inContentThumbs' + (params.evenColsDataType == \"text\" ? 'Text' : '');\n\n        config.nativeSkinIframe.style.width = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.nativeSkinIframe.style.maxWidth = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.nativeSkinIframe.style.minWidth = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.containerDiv.style.width = params.isResponsive? '100%': params.skinWidth + 'px';\n\n        if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n        {\n            \/\/playerIframeDiv must be absolute to control positions of the player and its thumbs\n            playerIframeDiv.style.position = 'absolute';\n        }\n        else\n        {\n            \/\/playerIframe must be absolute to control positions of the player and its thumbs\n            playerIframe.style.position = 'absolute';\n        }\n\n        \/\/The \"largeUnitWidth\" parameter is used for calculating text lines and position.\n        var largeUnitWidth = config.nativeSkinIframe.clientWidth;\n        function calcPlayerSize()\n        {\n            var skinWidth = params.isResponsive ? largeUnitWidth : params.skinWidth;\n            var relatedItemsWidth = relatedItemsWrapper.offsetWidth;\n            var actualPlayerWidth = updateActualThumbsCols(skinWidth, relatedItemsWidth);\n\n            config.width = config.videoWidth = actualPlayerWidth;\n            config.height = config.videoHeight =  actualPlayerWidth;\n            var val = {responsive: false, width: config.videoWidth, height: config.videoHeight};\n            \/\/ Affecting at floating unit sizes\n            if (!config.flowStatus)\n            {\n                config.bus.triggerNote('requestLayoutResize', val);\n            }\n\n            config.nativeSkinIframe.style.visibility = 'visible';\n            var rect = vidPlaceHolder.getBoundingClientRect();\n\n            relatedItemsWrapper.style.maxWidth = relatedItemsWrapper.style.maxWidth === \"\" ? (relatedItemsWidth) + \"px\" : relatedItemsWrapper.style.maxWidth;\n            \/\/ Affecting at floating unit location\n            if (!config.flowStatus)\n            {\n                if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n                {\n                    playerIframeDiv.style.top  = rect.top + 'px';\n                    playerIframeDiv.style.left = (params.thumbsColsPosition === \"right\" ? rect.left : (parseInt(relatedItemsWrapper.style.maxWidth, 10) + spaceBetweenPlayerAndRelatedItems)) + 'px';\n                }\n                else\n                {\n                    playerIframe.style.top  = rect.top + 'px';\n                    playerIframe.style.left = (params.thumbsColsPosition === \"right\" ? rect.left : (parseInt(relatedItemsWrapper.style.maxWidth, 10) + spaceBetweenPlayerAndRelatedItems)) + 'px';\n                }\n            }\n            relatedItemsWrapper.style.cssFloat = params.thumbsColsPosition;  \/\/ \"right\"\/\"left\"\n        }\n\n        function updateActualThumbsCols(skinWidth, relatedItemsWidth)\n        {\n            var numOfThumbsToChange = 0;\n            var newThumbsColsNum = actualThumbsColsNum;\n            var extraSpace = Math.abs(relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth - skinWidth);\n            var actualPlayerWidth = Math.max(skinWidth - relatedItemsWidth - spaceBetweenPlayerAndRelatedItems, minPlayerWidth);\n\n            \/\/ remove columns - player is minimum width and skin width is not large enough to contain the required thumbsColsNum\n            if (actualPlayerWidth === minPlayerWidth && (relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth > skinWidth))\n            {\n                numOfThumbsToChange = Math.ceil(extraSpace \/ (params.evenColsDataType === \"text\" ? thumbsColWidth * 2 + paddingBetweenThumbs : thumbsColWidth + paddingBetweenThumbs));\n                newThumbsColsNum = actualThumbsColsNum - numOfThumbsToChange;\n            }\n            \/\/ add more columns if we can - skin width is large enough to contain more required thumbs Cols\n            else if (relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth < skinWidth)\n            {\n                numOfThumbsToChange = Math.floor(extraSpace \/ (params.evenColsDataType === \"text\" ? thumbsColWidth * 2 + paddingBetweenThumbs : thumbsColWidth));\n                newThumbsColsNum =  actualThumbsColsNum + numOfThumbsToChange;\n            }\n\n            if (newThumbsColsNum !== actualThumbsColsNum)\n            {\n                newThumbsColsNum = Math.max(newThumbsColsNum, 0);\n                newThumbsColsNum = Math.min(newThumbsColsNum, params.thumbsColsNum);\n                actualThumbsColsNum = newThumbsColsNum;\n                relatedItemsWrapper.style.maxWidth = params.evenColsDataType === \"text\" ? (Math.max(2 * actualThumbsColsNum * (thumbsColWidth + paddingBetweenThumbs) - paddingBetweenThumbs, 0)) + \"px\" :\n                                                                                            (Math.max(actualThumbsColsNum * (thumbsColWidth + paddingBetweenThumbs) - paddingBetweenThumbs, 0)) + \"px\";\n                actualPlayerWidth = skinWidth - parseInt(relatedItemsWrapper.style.maxWidth, 10) - spaceBetweenPlayerAndRelatedItems;\n\n                \/\/ add\/remove columns and rearrange thumbs to fit to the actual thumbs cols num\n                rearrangeThumbs();\n            }\n            return actualPlayerWidth;\n        }\n\n        function rearrangeThumbs()\n        {\n            if (actualThumbsColsNum === 0)\n            {\n                return;\n            }\n            var totalRows = Math.ceil(config.contentPlayList.length \/ actualThumbsColsNum);\n\n            \/\/hide not needed rows\n            for (var h=0;h < config.contentPlayList.length - totalRows ;h++)\n            {\n                showOrHideThumbsRow(totalRows + h, \"hide\");\n            }\n\n            var index = 0;\n            var contentIndex = 0;\n\n            var rows = [];\n            currThumbsMatrix = [];\n            for (var i=0;i<totalRows;i++)\n            {\n                for (var j=0;j<actualThumbsColsNum;j++)\n                {\n                    var thumbUnit = new ThumbnailUnit(index, contentIndex++);\n                    rows.push(rowsArray[index]);\n                    index++;\n                }\n                currThumbsMatrix.push(rows);\n                rows = [];\n                index += params.thumbsColsNum - actualThumbsColsNum;\n\n                showOrHideThumbsRow(i, \"show\");\n            }\n\n            AddNowPlayingLabel(config.currContentIndex);\n        }\n\n        \/\/ operation - show\/hide\n        function showOrHideThumbsRow(rowIndex, operation)\n        {\n            for (var i=0;i < rowsArray.length ;i++)\n            {\n                if (rowsArray[i].rowIndex === rowIndex)\n                {\n                    rowsArray[i].thumbRow.style.display = (operation === \"show\") ? \"block\" : \"none\";\n                }\n            }\n        }\n\n        \/\/Set titles display\n        if (isDisplayMainTitle)\n        {\n            featuredVideos.innerText = (params.mainTitle && params.mainTitle.length)? params.mainTitle : 'FEATURED VIDEOS';\n        }\n        else\n        {\n            featuredVideos.innerText = '';\n        }\n\n        \/\/Set primis logo display\n        if(!params.primisLogoOn && !isDisplayMainTitle)\n        {\n            titlesTable.style.display = 'none';\n        }\n        else if(!params.primisLogoOn)\n        {\n            titlesTable.rows[0].cells[1].style.display = 'none';\n        }\n\n        function addCustomFontLinks(fontLinks)\n        {\n            if(fontLinks)\n            {\n                var linksArray = fontLinks.split(\"#!#\");\n                for (var k = 0; k < linksArray.length; k++)\n                {\n                    var head  = document.getElementsByTagName(\"head\")[0];\n                    var link  = document.createElement(\"link\");\n                    link.rel  = \"stylesheet\";\n                    link.type = \"text\/css\";\n                    link.href = linksArray[k];\n                    head.appendChild(link);\n                }\n            }\n        }\n\n        \/\/Crops the titles and descriptions to fit with requested number of lines\n        function cropTextByLines(obj1, linesNum, innerHtml, addedDots, addedTxt, width)\n        {\n            var strArray = innerHtml.split(\" \");\n\n            \/\/Calculate a single line height and everege letter width\n            obj1.style.width = 'fit-content';\n            obj1.innerHTML = \"WIwaii\";\n            var lineHeight = obj1.clientHeight;\n            var letterWidth = obj1.offsetWidth\/6;\n            var lettersNum = Math.round((width - 20)\/letterWidth);\n\n            obj1.innerHTML = \"\";\n            obj1.style.width = width;\n\n            \/\/Calculate the text height and add only the requiered words\n            for (var i = 0; i < strArray.length; i++)\n            {\n                var tmpArr = strArray.slice(0, (i+1));\n                obj1.innerHTML = tmpArr.join(\" \") + addedDots + addedTxt;\n\n                \/\/Check if we acceded lines height\n                if((lineHeight*linesNum) < obj1.clientHeight)\n                {\n                    var tmpArr = strArray.slice(0, i);\n                    var j = i;\n                    while((lineHeight*linesNum) < obj1.clientHeight)\n                    {\n                        tmpArr = strArray.slice(0, (j--));\n                        var str\n                        if(tmpArr.length)\n                        {\n                            str = tmpArr.join(\" \") + addedDots  + addedTxt;\n                            obj1.innerHTML = str;\n                        }\n                        else\n                        {\n                            var addedStr = addedDots + addedTxt;\n                            var addedTxtLength = addedStr.length;\n                            str = strArray[0].slice(0,(lettersNum - addedTxtLength))+addedStr;\n                            obj1.innerHTML = str;\n\n                            break;\n                        }\n                    }\n                    break;\n                }\n\n                \/\/All sentence is viewable\n                if(i == strArray.length-1)\n                {\n                    obj1.innerHTML = tmpArr.join(\" \") + addedTxt;\n                }\n            }\n        }\n\n        function ThumbnailUnit(i, index)\n        {\n            if (index >= config.contentPlayList.length)\n            {\n                return;\n            }\n\n            var thumbMoreAddedTxt = '';\n            rowsArray[i].imgTd.innerHTML = '';\n\n            if (params.evenColsDataType === \"text\")\n            {\n                rowsArray[i].titleContainer.innerHTML = config.contentPlayList[index].title;\n                if (params.showDescription)\n                {\n                    rowsArray[i].descriptionContainer.innerHTML = config.contentPlayList[index].desc;\n                }\n            }\n\n            var img = new Image(thumbsColWidth, thumbsHeight);\n            img.src = config.contentPlayList[index].bgImg;\n\n            img.style.cursor = \"pointer\";\n            img.onImgError = function ()\n            {\n                \/\/Avoid infinity error loop\n                if(img.isImgError)\n                {\n                    img.parentNode.removeChild(img);\n                    return;\n                }\n                img.isImgError = true;\n                img.src = defaultImgSrc;\n            }\n            img.addEventListener('error', img.onImgError);\n            rowsArray[i].imgTd.appendChild(img);\n\n            \/\/ handle click on read more text\n            rowsArray[i].imgCol.clkUrl = config.contentPlayList[index].clkUrl ? config.contentPlayList[index].clkUrl : \"\";\n            rowsArray[i].imgCol.fileId = config.contentPlayList[index].fileId ? config.contentPlayList[index].clkUrl : \"\";\n\n            if (isDisplayReadMore)\n            {\n                thumbMoreAddedTxt = readMoreAddedTxtOrigin;\n            }\n\n            rowsArray[i].imgCol.onclick = function ()\n            {\n                onVideoClick();\n            }\n            rowsArray[i].txtTd.onclick = function ()\n            {\n                onVideoClick();\n            }\n\n            var onVideoClick = function()\n            {\n                if (config.adIsPlaying)\n                {\n                    return;\n                }\n                config.nextContentIndex = index;\n                config.intentInitiator = 'userSwitchContentFS';\n                config.bus.triggerNote('intentOn');\n                config.bus.triggerNote('onUserEvent', {type: 'onPlay'});\n                config.bus.triggerNote('userSwitchContent');\n            }\n            this.cropTexts = function(){\n                var unitWidth = thumbsColWidth;\n\n                if(config.contentPlayList[index].desc && config.contentPlayList[index].desc.length && params.showDescription)\n                {\n                    cropTextByLines(rowsArray[i].titleContainer, params.descriptionLinesToCropAfter, config.contentPlayList[index].title, strBreakAddedTxt, '', unitWidth);\n                    cropTextByLines(rowsArray[i].descriptionContainer, (params.titleLinesToCropAfter - 1), config.contentPlayList[index].desc, strBreakAddedTxt, thumbMoreAddedTxt, unitWidth);\n                }\n                else\n                {\n                    cropTextByLines(rowsArray[i].titleContainer, params.titleLinesToCropAfter, config.contentPlayList[index].title, strBreakAddedTxt, thumbMoreAddedTxt, unitWidth);\n                }\n            }\n            if (params.evenColsDataType === \"text\")\n            {\n                this.cropTexts();\n            }\n        }\n\n        function AddNowPlayingLabel(currVideoIndex)\n        {\n            if (currVideoIndex === undefined || actualThumbsColsNum === 0)\n            {\n                return;\n            }\n            var row = Math.floor((currVideoIndex) \/ actualThumbsColsNum);\n            var col = currVideoIndex - row * actualThumbsColsNum;\n\n            \/\/remove now playing label from previous video\n            if (prevContent)\n            {\n                prevContent[\"nowPlayingDiv\"].style.display = \"none\";\n            }\n            \/\/add now playing label to current video\n\t        currThumbsMatrix[row][col][\"nowPlayingDiv\"].style.display = config.playerTemplateData.isShowPlaylistNowPlaying == 1 ? \"block\" : \"none\";\n            prevContent = currThumbsMatrix[row][col];\n        }\n\n        function generateThums()\n        {\n            rowsArray = [];\n\n            var totalRows = config.contentPlayList.length;\n\n            \/\/Generate thumbs HTML objects\n            for (var i = 0; i < totalRows; i++)\n            {\n                \/\/ Create an empty <tr> element and add it to the 1st position of the table:\n                var row = relatedItemsTable.insertRow(i);\n                var totalRowCells = actualThumbsColsNum * 2;\n                var rows = [];\n\n                for (var j = 0; j < totalRowCells; j+=2)\n                {\n                    var cellj = row.insertCell(j);\n                    var cellj2 = row.insertCell(j+1);\n\n                    cellj.className = \"contentTd\";\n                    cellj2.className = \"contentTd\";\n\n                    var txtContainer = document.createElement('div');\n                    var titleContainer = document.createElement('div');\n                    var descriptionContainer = document.createElement('div');\n\n                    var imgContainerDiv = document.createElement('div');\n                    imgContainerDiv.style.position = 'relative';\n                    imgContainerDiv.style.width = thumbsColWidth + \"px\";\n                    var imgDiv = document.createElement('div');\n\n\n                    var nowPlayingDiv = document.createElement('div');\n                    nowPlayingDiv.innerHTML = nowPlayingHtml;\n                    var coverBoxDiv = document.createElement('div');\n                    coverBoxDiv.innerHTML = coverBoxHtml;\n                    nowPlayingDiv.appendChild(coverBoxDiv);\n                    nowPlayingDiv.style.display = \"none\";\n                    imgContainerDiv.appendChild(nowPlayingDiv);\n\n                    var playBtnDiv = document.createElement('div');\n                    playBtnDiv.innerHTML = playBtnSvg;\n                    playBtnDiv.style.position = 'absolute';\n                    playBtnDiv.style.width = '25px';\n                    playBtnDiv.style.height = '25px';\n                    playBtnDiv.style.top = '50%';\n                    playBtnDiv.style.left = '50%';\n                    playBtnDiv.style.transform = 'translate(-50%, -50%)';\n                    playBtnDiv.style.pointerEvents = 'none';\n\n                    titleContainer.classList.add(\"thumbnail-title\");\n                    descriptionContainer.classList.add(\"thumbnail-desc\");\n                    txtContainer.appendChild(titleContainer)\n                    txtContainer.appendChild(descriptionContainer)\n                    imgContainerDiv.appendChild(imgDiv)\n                    imgContainerDiv.appendChild(playBtnDiv)\n                    cellj.appendChild(imgContainerDiv)\n\n                    cellj.style.paddingRight = paddingBetweenThumbs + \"px\";\n                    cellj2.style.paddingRight = paddingBetweenThumbs + \"px\";\n\n                    if (params.evenColsDataType === \"thumbs\" && j === totalRowCells-2)\n                    {\n                        \/\/ last column has no padding to the right\n                        cellj.style.paddingRight = \"0px\";\n                    }\n\n                    txtContainer.style.cursor = \"pointer\";\n                    txtContainer.style.width = thumbsColWidth + \"px\";\n                    txtContainer.style.height = thumbsHeight + \"px\";\n\n                    if (i !== (totalRows-1))\n                    {\n                        cellj.style.paddingBottom = paddingBetweenThumbs + \"px\";\n                        cellj2.style.paddingBottom = paddingBetweenThumbs + \"px\";\n                    }\n\n                    cellj2.appendChild(txtContainer);\n\n                    if (params.evenColsDataType === \"thumbs\")\n                    {\n                        cellj2.style.display = \"none\";\n                    }\n                    var thumbObj = {imgTd:imgDiv, playBtn:playBtnDiv, imgCol:cellj, txtTd:cellj2, txtContainer:txtContainer, titleContainer:titleContainer, descriptionContainer:descriptionContainer,\n                        nowPlayingDiv:nowPlayingDiv, thumbRow:row, rowIndex:i};\n\n                    rowsArray.push(thumbObj);\n                    rows.push(thumbObj);\n\n                }\n                currThumbsMatrix.push(rows);\n            }\n\n            \/\/set thumbnails actual content\n            for (i = 0; i < config.contentPlayList.length; i++)\n            {\n                var thumbUnit = new ThumbnailUnit(i, 0);\n            }\n        }\n\n        generateThums();\n        \/\/Timeout is needed for IE that haz a delay in rendering the HTML\n        setTimeout(function()\n        {\n\n            calcPlayerSize();\n            rearrangeThumbs();\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n            AddNowPlayingLabel(config.currContentIndex);\n        },10);\n\n\n        \/\/Size change detector\n        setInterval(function ()\n        {\n            if (largeUnitWidth != config.containerDiv.clientWidth && !config.FSservice.isFullscreen)\n            {\n                largeUnitWidth = config.containerDiv.clientWidth;\n                calcPlayerSize();\n            }\n        }, 10);\n\n        \/\/Objects merging func\n        function merge2Objs(obj, src)\n        {\n            for (var key in src)\n            {\n                if (src.hasOwnProperty(key))\n                {\n                    obj[key] = src[key];\n                }\n            }\n            return obj;\n        }\n\n        function getDisplayStateByContent(paramsField)\n        {\n            return (paramsField.trim().length == 0) ? false : true;\n        }\n\n        config.bus.addCallBack(\"adStarted\", function(val)\n        {\n            config.nativeSkinIframe.style.opacity = '0.3';\n        });\n        config.bus.addCallBack(\"adCompleted\", function(val)\n        {\n            config.nativeSkinIframe.style.opacity = '1';\n            config.nativeSkinIframe.style.backfaceVisibility = 'hidden'; \/\/ needed for chrome opacity transitions\n        });\n\n        config.bus.addCallBack(\"onNextContentInited\", function(val)\n        {\n            clkUrl = '';\n            fileId = '';\n            AddNowPlayingLabel(config.currContentIndex);\n            if (getDisplayStateByContent(config.playerTemplateData.goToArticleText) &&\n                val.content.clkUrl && val.content.clkUrl.length)\n            {\n                clkUrl = val.content.clkUrl;\n                fileId = val.content.fileId;\n            }\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n        });\n\n        \/\/ for correct positioning in flow\n        config.bus.addCallBack(\"onFlowStatusChange\", function(val)\n        {\n            if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n            {\n                playerIframeDiv.style.top = 'auto';\n                playerIframeDiv.style.left = 'auto';\n\n                setTimeout(function()\n                {\n                    if(!val)\n                    {\n                        \/\/ reset absolute position of the player in skin when return from flow\n                        playerIframeDiv.style.zIndex = 1;\n                        var rect = vidPlaceHolder.getBoundingClientRect();\n                        playerIframeDiv.style.top = rect.top+'px';\n                        playerIframeDiv.style.left = rect.left+'px';\n                        playerIframeDiv.style.position = 'absolute';\n                    }\n                },1)\n            }\n            else\n            {\n                playerIframe.style.top = 'auto';\n                playerIframe.style.left = 'auto';\n\n                setTimeout(function()\n                {\n                    if(!val)\n                    {\n                        \/\/ reset absolute position of the player in skin when return from flow\n                        playerIframe.style.zIndex = 1;\n                        var rect = vidPlaceHolder.getBoundingClientRect();\n                        playerIframe.style.top = rect.top+'px';\n                        playerIframe.style.left = rect.left+'px';\n                        playerIframe.style.position = 'absolute';\n                    }\n                },1)\n            }\n        });\n\n\n        config.bus.addCallBack(\"onPlayerResize\", function(val)\n        {\n            if(config.flowStatus || config.FSservice.isFullscreen)return;\n            vidPlaceHolder.style.width = val.playerWidth +'px';\n            vidPlaceHolder.style.height = val.playerHeight +'px';\n\n            \/\/ need to first limit relatedItems height and only then update nativeSkinIframe height with the updated height of largeUnit\n            relatedItemsWrapper.style.maxHeight = val.playerHeight + \"px\";\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n        });\n\n        primisLogo.onclick = function()\n        {\n            window.top.open('https:\/\/www.primis.tech?utm_source='+config.domain+'&utm_medium='+config.nativeSkinType+'&utm_campaign=promoted', \"_blank\");\n        }\n\n    }\n<\/script>");
				nativeSkinIframeDoc.close();
				nativeSkinIFrameWindow.playerIframe = playerIframe;
				nativeSkinIframeDoc.body.style.padding = 0;
				nativeSkinIframeDoc.body.style.margin = 0;
			}

		}
		//We have a unique designed skin
		else
		{
			//Inject the skin into the container div
			containerDiv.insertAdjacentHTML('beforeend', "\n<!--\n\/\/Declerations samples\n$nativeHtml = '{\"skinName\":\"InContentThumbsSkin\"}';\n$nativeHtml = '{\"skinName\": \"InContentThumbsSkin\", \"externalParams\":{\"skinWidth\": 600, \"mainTitle\": \"FEATURED VIDEOS\", \"readMoreText\": \"Watch Video\", \"primisLogoOn\":true, \"showDescription\":false, \"fontLinks\":\"https:\/\/fonts.googleapis.com\/css?family=Karla:400,700|Libre+Baskerville:400,400i,700&subset=latin-ext\", \"titleLinesToCropAfter\":2}}';\n\nconfig.primisSkinParams:\n\/\/Set default params\n        var params = {};\/\/ config object\n        params.mainTitle = \"FEATURED VIDEOS\"; \/\/ String, default is \"FEATURED VIDEOS\" (if not declared), the unit left top side title\n        params.readMoreText = \"Watch Video\"; \/\/ String, default is \"Read More\" (if not declared), empty string will hide read-more element\n        params.primisLogoOn = true; \/\/ Boolean, default is true (if not declared), show or hide the right top side primis logo\n        params.skinWidth = 690; \/\/Integer , default 690 (if not declared), set the skin width if 'isResponsive' set to 'false'. other wize skin width is responsive\n        params.fontLinks = null; \/\/ String, custom font links that will be additionally included at the page\n        params.css = null; \/\/ String, css structure that overrides the current css. an example for background and title colors change '.Large-unit{ background-color: #ff0055; } .main-title{ color: white; }';\n        params.showDescription = false; \/\/Boolean, default is false (if not declared), show video description\n        params.titleLinesToCropAfter = 4; \/\/Integer , default 1 (if not declared), set main title number of lines to be cropped after\n        params.descriptionLinesToCropAfter = 1; \/\/Integer , default 3 (if not declared), set description number of lines to be cropped after\n        params.thumbsColsNum = 1 \/\/Integer , default 1 (if not declared), set number of columns for thumbnails\n        params.evenColsDataType = \"text\";   \/\/String, default is \"text\", (options are: \"text\", \"thumbs\") set even thumbnail column to contain video image or video description\n        params.thumbsColsPosition = \"right\"; \/\/ string, default is right (options are: \"right\", \"left\"), show thumbnails to the right\/left of the player\n-->\n\n<style type=\"text\/css\">\n\n    .tablesDefault\n    {\n        border-collapse: collapse;\n    }\n\n    .contentTd\n    {\n        padding: 0;\n    }\n\n    .Large-unit\n    {\n        display: inline-block;\n        background-color: white;\n        width: 100%;\n    }\n\n    .main-title\n    {\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: bold;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #9b9b9b;\n    }\n\n    .Promoted-by-primis\n    {\n        width: 96.4px;\n        height: 11px;\n        font-family: Roboto;\n        font-size: 10px;\n        font-weight: 500;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #9b9b9b;\n    }\n\n    .thumbnail-read-more\n    {\n        font-family: Roboto;\n        font-size: 10px;\n        font-weight: bold;\n        font-style: italic;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        color: #f2405e;\n        text-decoration: underline;\n    }\n\n    .thumbnail-title\n    {\n        width:130px;\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: bold;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: normal;\n        letter-spacing: normal;\n        word-wrap: break-word;\n        color: #062242;\n    }\n\n    .thumbnail-desc\n    {\n        font-family: Roboto;\n        font-size: 12px;\n        font-weight: normal;\n        font-style: normal;\n        font-stretch: normal;\n        line-height: 1.25;\n        letter-spacing: 0.1px;\n        word-wrap: break-word;\n        color: #000000;\n    }\n\n    .relatedItemsWrapper::-webkit-scrollbar {\n        display: none;\n    }\n\n    .relatedItemsWrapper {\n        overflow-y: scroll;\n        overflow-x: hidden;\n        scrollbar-width: none; \/* Firefox *\/\n        -ms-overflow-style: none;  \/* IE 10+ *\/\n    }\n    .relatedItemsWrapper::-webkit-scrollbar { \/* WebKit *\/\n        width: 0;\n        height: 0;\n    }\n\n<\/style>\n\n<div id=\"largeUnit\" class=\"Large-unit\">\n    <table id=\"titlesTable\" class=\"tablesDefault\" style=\"width: 100%; \">\n        <tr style=\"height: 20px; border-spacing: 0px;\" valign=\"top\">\n            <td>\n                <div id=\"featuredVideos\" class=\"main-title\"><\/div>\n            <\/td>\n            <td  style=\"text-align: right\">\n                <div id=\"primisLogo\" style=\"margin-right: -2px; display: inline-flex; cursor: pointer;\">\n                    <div id=\"promotedBy\" style=\"position:relative; top: -3px; padding-right: 3px\" class=\"Promoted-by-primis\">Powered by <\/div>\n                    <div id=\"primisLogoImg\" style=\" height: 11px; width: 37px; object-fit: contain;\"><\/div>\n                <\/div>\n            <\/td>\n        <\/tr>\n    <\/table>\n   <table id=\"skinContent\" class=\"tablesDefault\" style=\"width: 100%\">\n        <tr id=\"skinContentTr\"><\/tr>\n    <\/table>\n<\/div>\n\n<script type=\"text\/javascript\">\n    \/\/Add Robotto font\n    var head  = document.getElementsByTagName(\"head\")[0];\n    var link  = document.createElement(\"link\");\n    link.rel  = \"stylesheet\";\n    link.type = \"text\/css\";\n    link.href = \"https:\/\/fonts.googleapis.com\/css?family=Roboto&display=swap\";\n    head.appendChild(link);\n\n    SekindoNativeSkinApi = function(config)\n    {\n        \/\/Set default params\n        var params = {};\/\/ config object\n        params.mainTitle = \"FEATURED VIDEOS\"; \/\/ String, default is \"FEATURED VIDEOS\" (if not declared), the unit left top side title\n        params.readMoreText = \"Watch Video\"; \/\/ String, default is \"Read More\" (if not declared), empty string will hide read-more element\n        params.primisLogoOn = true; \/\/ Boolean, default is true (if not declared), show or hide the right top side primis logo\n        params.skinWidth = 690; \/\/Integer , default 690 (if not declared), set the skin width if 'isResponsive' set to 'false'. other wize skin width is responsive\n\n        params.isResponsive = false;\/\/ Boolean, default is \"false\", if set to \"true\" then the skinWidth is set to '100%'\n        params.fontLinks = null; \/\/ String, custom font links that will be additionally included at the page\n        params.css = null; \/\/ String, css structure that overrides the current css. an example for background and title colors change '.Large-unit{ background-color: #ff0055; } .main-title{ color: white; }';\n        params.showDescription = false; \/\/Boolean, default is false (if not declared), show video description\n        params.titleLinesToCropAfter = 4; \/\/Integer , default 4 (if not declared), set main title number of lines to be cropped after\n        params.descriptionLinesToCropAfter = 1; \/\/Integer , default 1 (if not declared), set description number of lines to be cropped after\n        params.thumbsColsNum = 1; \/\/Integer , default 1 (if not declared), set number of columns for thumbnails\n        params.evenColsDataType = \"text\";   \/\/String, default is \"text\", (options are: \"text\", \"thumbs\") set even thumbnail column to contain video image or video description\n        params.thumbsColsPosition = \"right\"; \/\/ string, default is right (options are: \"right\", \"left\"), show thumbnails to the right\/left of the player\n\n        \/\/Merge current params with external params.\n        params = merge2Objs(params, config.primisSkinParams);\n\n        \/\/Get html elements\n        var largeUnit = document.getElementById(\"largeUnit\");\n        var featuredVideos = document.getElementById(\"featuredVideos\");\n        var titlesTable = document.getElementById(\"titlesTable\");\n        var primisLogo = document.getElementById(\"primisLogo\");\n        var primisLogoImg = document.getElementById(\"primisLogoImg\");\n        var promotedBy = document.getElementById(\"promotedBy\");\n        var skinContentTr = document.getElementById(\"skinContentTr\");\n\n        var playerTd = document.createElement(\"td\");\n        playerTd.className = 'contentTd';\n        playerTd.style.display = 'inline-block';\n        var vidPlaceHolder = document.createElement(\"div\");\n        playerTd.appendChild(vidPlaceHolder);\n        var relatedItemsTd = document.createElement(\"td\");\n        relatedItemsTd.className = \"contentTd\";\n        relatedItemsTd.style.verticalAlign = \"top\";\n\n        var relatedItemsWrapper = document.createElement(\"div\");\n        relatedItemsWrapper.className = 'relatedItemsWrapper'\n        relatedItemsWrapper.style.display = 'inline-block';\n        var relatedItemsTable = document.createElement(\"table\");\n        relatedItemsTable.className = 'tablesDefault';\n        relatedItemsTd.appendChild(relatedItemsWrapper);\n        relatedItemsWrapper.appendChild(relatedItemsTable);\n\n        if (params.thumbsColsPosition == \"right\")\n        {\n            skinContentTr.appendChild(playerTd);\n            skinContentTr.appendChild(relatedItemsTd);\n        }\n        else\n        {\n            skinContentTr.appendChild(relatedItemsTd);\n            skinContentTr.appendChild(playerTd);\n        }\n        vidPlaceHolder.style.width = '100%';\n\n        \/\/Declare vars\n        var strBreakAddedTxt = \"\u2026\";\n        var readMoreAddedTxtOrigin = '';\n        var defaultImgSrc = decodeURI(config.absolutePath+'\/content\/video\/splayer\/assets\/bigPlayBtn.jpg');\n        var clkUrl = \"\";\n        var fileId = '';\n        var rowsArray = []; \/\/ full matrix of contentList*colsNum\n        var currThumbsMatrix = []; \/\/ actual displayed matrix of thumbs\n        var isDisplayMainTitle;\n        var isDisplayReadMore;\n        var thumbsColWidth = 130;\n        var thumbsHeight = 73;\n        var paddingBetweenThumbs = 7;\n        var spaceBetweenPlayerAndRelatedItems = 7;\n        var prevContent;\n        var minPlayerWidth = 300;\n        var actualThumbsColsNum =  params.thumbsColsNum;\n\n        var playBtnSvg = '<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"100%\" height=\"100%\" enable-background=\"new 0 0 494.148 494.148\" viewBox=\"0 0 494.148 494.148\"><path fill=\"#fff\" d=\"M405.284 201.188L130.804 13.28C118.128 4.596 105.356 0 94.74 0 74.216 0 61.52 16.472 61.52 44.044v406.124c0 27.54 12.68 43.98 33.156 43.98 10.632 0 23.2-4.6 35.904-13.308l274.608-187.904c17.66-12.104 27.44-28.392 27.44-45.884.004-17.48-9.664-33.764-27.344-45.864z\"\/><\/svg>';\n        var primisLogoSvg = '<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\"  viewBox=\"0 0 877.5 228.7\" style=\"enable-background:new 0 0 877.5 228.7;\" xml:space=\"preserve\"> <style type=\"text\/css\"> .st0{fill:#022242;} .st1{fill:#FF3E5F;} <\/style> <path class=\"st0\" d=\"M154.2,195H115l29.8-146.3H184l-2.4,11.5c5.4-7.8,16-12.8,29-12.8c24,0,47.4,18.8,47.4,49.4 c0,34.9-30.8,62.4-61.9,62.4c-16.5,0-29.5-5-32-12.8L154.2,195z M192.2,124.1c13.6,0,24.5-10.8,24.5-22.7c0-11-8.5-18.8-20.6-18.8 c-14.3,0-24.7,11-24.7,22.5C171.4,116,179.9,124.1,192.2,124.1L192.2,124.1z\"\/> <path class=\"st0\" d=\"M280.2,48.7h40.1l-2.8,13.4c8.7-12.1,18.2-16,29.9-16c4.4,0,8.9,0.4,13.2,1.2l-7.2,35.7 c-4.7-0.8-9.5-1.1-14.3-1.1c-17.3,0-27.9,12.6-32.3,33.1l-8.9,42.7h-40.1L280.2,48.7z\"\/> <path class=\"st0\" d=\"M374.9,48.7h40.1l-22.3,109.1h-40.1L374.9,48.7z M377.7,24c0-12.6,10.8-24,24.5-24c12.1,0,20.6,8.5,20.6,19.9 c0,12.1-10.4,23.8-24.5,23.8C386.1,43.7,377.7,35.5,377.7,24L377.7,24z\"\/> <path class=\"st0\" d=\"M430.8,48.7h40.1l-2.8,13.4c8-12.1,17.1-16,27.9-16c14.3,0,24.9,6.3,29.2,16.9c9.3-11,23.1-17.2,37.4-16.9 c21.4,0,33.6,14.1,33.6,36.2c0,3.6-0.4,7.3-1.1,10.8l-13.4,64.8h-40.1l12.3-61.1c0.2-1.4,0.4-2.9,0.4-4.3c0-7.6-3.7-12.1-10.6-12.1 c-8.7,0-14.3,7.4-16.5,18l-12.3,59.6H475l12.3-61.1c0.2-1.4,0.4-2.9,0.4-4.3c0-7.6-3.7-12.1-10.6-12.1c-8.7,0-14.3,6.9-16.5,17.5 l-12.1,60h-40.1L430.8,48.7z\"\/> <path class=\"st0\" d=\"M619.7,48.7h40.1l-22.3,109.2h-40.1L619.7,48.7z M622.5,24c0-12.6,10.8-24,24.5-24c12.1,0,20.6,8.5,20.6,19.9 c0,12.1-10.4,23.8-24.5,23.8C631,43.7,622.5,35.5,622.5,24z\"\/> <path class=\"st0\" d=\"M676.1,116.7c7.4,8.7,18.4,10.8,29.9,10.8c9.5,0,12.8-2.4,12.8-5.2c0-4.8-18.4-3.9-32.9-11 c-11.5-5.6-17.5-14.5-17.5-26.9c0-21,20.6-39,48.9-39c16.6-0.1,32.7,5.8,45.3,16.7l-20.1,25.3c-7.4-6.7-17.1-10.4-27.1-10.4 c-7.6,0-10.4,2.8-10.4,5.6c0,5.2,15.2,4.8,33.3,11.9c14.3,5.6,18,16.2,18,27.1c0,24.5-18.8,39.4-54.6,39.4 c-22.7,0-40.1-7.4-50.7-19.7L676.1,116.7z\"\/> <path class=\"st1\" d=\"M81.9,195l-6.9,33.8H0L46.5,0h74.9l-6.9,33.8H77.3L44.6,195H81.9z\"\/> <path class=\"st1\" d=\"M795.6,33.7L802.5,0h74.9L831,228.7H756L763,195h37.3l32.6-161.2L795.6,33.7z\"\/> <\/svg>';\n        var nowPlayingHtml = '<div style=\"width: 70px; text-align: center; text-decoration: none; left: 50%; top: 50%; transform: translate(-50%, -50%); font-size: 11px; display: block; position: absolute; line-height: 12px; letter-spacing: 0.11px; z-index: 100; pointer-events: none; color: white; font-family: Roboto; text-overflow: ellipsis; white-space: nowrap; overflow: hidden; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">NOW <br> PLAYING<\/div>';\n        var coverBoxHtml = '<div style=\"opacity: 1; width: 130px; height: 73px; position: absolute; left: 0px; bottom: 0px; z-index: 1; background-color: rgba(0, 0, 0, 0.4); overflow: hidden; user-select: none; display: block; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\" class=\"\"><\/div>';\n\n        if(params.css)\n        {\n            var style = document.createElement('style');\n            style.type = 'text\/css';\n            style.appendChild(document.createTextNode(params.css));\n            document.body.appendChild(style);\n        }\n        \/\/Add custom font links separated by #!#\n        addCustomFontLinks(params.fontLinks);\n\n        isDisplayMainTitle = getDisplayStateByContent(params.mainTitle);\n        \/\/Set read more text\n        readMoreAddedTxtOrigin  = ' <a class=\"thumbnail-read-more\" style=\"color:'+config.playerTemplateData.designColor+'\" > '+params.readMoreText+'<\/a>';\n        isDisplayReadMore = getDisplayStateByContent(params.readMoreText);\n\n        \/\/Set logo and update it's colors\n        var rgb = getComputedStyle(largeUnit).backgroundColor.match(\/\\d+\/g);\n        var R = parseInt(rgb[0]);\n        var G = parseInt(rgb[1]);\n        var B = parseInt(rgb[2]);\n        var avg = (R+G+B)\/3;\n\n        \/\/White logo\n        if(R > 180 &&  G < 120  && R \/ ((G+B)\/2) > 1.2)\n        {\n            primisLogoSvg = primisLogoSvg.replace('st0{fill:#022242;}', 'st0{fill:#ffffff;}')\n            primisLogoSvg = primisLogoSvg.replace('st1{fill:#FF3E5F;}', 'st1{fill:#ffffff;}')\n        }\n        \/\/Bright logo\n        else if(avg < 150)\n        {\n            primisLogoSvg = primisLogoSvg.replace('st0{fill:#022242;}', 'st0{fill:#ffffff;}')\n        }\n        \/\/White \"Powered by\"\n        if(avg > 115 && avg < 195)\n        {\n            promotedBy.style.color = '#FFF'\n        }\n        primisLogoImg.innerHTML = primisLogoSvg;\n\n        config.nativeSkinType = 'inContentThumbs' + (params.evenColsDataType == \"text\" ? 'Text' : '');\n\n        config.nativeSkinIframe.style.width = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.nativeSkinIframe.style.maxWidth = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.nativeSkinIframe.style.minWidth = params.isResponsive? '100%': params.skinWidth + 'px';\n        config.containerDiv.style.width = params.isResponsive? '100%': params.skinWidth + 'px';\n\n        if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n        {\n            \/\/playerIframeDiv must be absolute to control positions of the player and its thumbs\n            playerIframeDiv.style.position = 'absolute';\n        }\n        else\n        {\n            \/\/playerIframe must be absolute to control positions of the player and its thumbs\n            playerIframe.style.position = 'absolute';\n        }\n\n        \/\/The \"largeUnitWidth\" parameter is used for calculating text lines and position.\n        var largeUnitWidth = config.nativeSkinIframe.clientWidth;\n        function calcPlayerSize()\n        {\n            var skinWidth = params.isResponsive ? largeUnitWidth : params.skinWidth;\n            var relatedItemsWidth = relatedItemsWrapper.offsetWidth;\n            var actualPlayerWidth = updateActualThumbsCols(skinWidth, relatedItemsWidth);\n\n            config.width = config.videoWidth = actualPlayerWidth;\n            config.height = config.videoHeight =  actualPlayerWidth;\n            var val = {responsive: false, width: config.videoWidth, height: config.videoHeight};\n            \/\/ Affecting at floating unit sizes\n            if (!config.flowStatus)\n            {\n                config.bus.triggerNote('requestLayoutResize', val);\n            }\n\n            config.nativeSkinIframe.style.visibility = 'visible';\n            var rect = vidPlaceHolder.getBoundingClientRect();\n\n            relatedItemsWrapper.style.maxWidth = relatedItemsWrapper.style.maxWidth === \"\" ? (relatedItemsWidth) + \"px\" : relatedItemsWrapper.style.maxWidth;\n            \/\/ Affecting at floating unit location\n            if (!config.flowStatus)\n            {\n                if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n                {\n                    playerIframeDiv.style.top  = rect.top + 'px';\n                    playerIframeDiv.style.left = (params.thumbsColsPosition === \"right\" ? rect.left : (parseInt(relatedItemsWrapper.style.maxWidth, 10) + spaceBetweenPlayerAndRelatedItems)) + 'px';\n                }\n                else\n                {\n                    playerIframe.style.top  = rect.top + 'px';\n                    playerIframe.style.left = (params.thumbsColsPosition === \"right\" ? rect.left : (parseInt(relatedItemsWrapper.style.maxWidth, 10) + spaceBetweenPlayerAndRelatedItems)) + 'px';\n                }\n            }\n            relatedItemsWrapper.style.cssFloat = params.thumbsColsPosition;  \/\/ \"right\"\/\"left\"\n        }\n\n        function updateActualThumbsCols(skinWidth, relatedItemsWidth)\n        {\n            var numOfThumbsToChange = 0;\n            var newThumbsColsNum = actualThumbsColsNum;\n            var extraSpace = Math.abs(relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth - skinWidth);\n            var actualPlayerWidth = Math.max(skinWidth - relatedItemsWidth - spaceBetweenPlayerAndRelatedItems, minPlayerWidth);\n\n            \/\/ remove columns - player is minimum width and skin width is not large enough to contain the required thumbsColsNum\n            if (actualPlayerWidth === minPlayerWidth && (relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth > skinWidth))\n            {\n                numOfThumbsToChange = Math.ceil(extraSpace \/ (params.evenColsDataType === \"text\" ? thumbsColWidth * 2 + paddingBetweenThumbs : thumbsColWidth + paddingBetweenThumbs));\n                newThumbsColsNum = actualThumbsColsNum - numOfThumbsToChange;\n            }\n            \/\/ add more columns if we can - skin width is large enough to contain more required thumbs Cols\n            else if (relatedItemsWidth + spaceBetweenPlayerAndRelatedItems + minPlayerWidth < skinWidth)\n            {\n                numOfThumbsToChange = Math.floor(extraSpace \/ (params.evenColsDataType === \"text\" ? thumbsColWidth * 2 + paddingBetweenThumbs : thumbsColWidth));\n                newThumbsColsNum =  actualThumbsColsNum + numOfThumbsToChange;\n            }\n\n            if (newThumbsColsNum !== actualThumbsColsNum)\n            {\n                newThumbsColsNum = Math.max(newThumbsColsNum, 0);\n                newThumbsColsNum = Math.min(newThumbsColsNum, params.thumbsColsNum);\n                actualThumbsColsNum = newThumbsColsNum;\n                relatedItemsWrapper.style.maxWidth = params.evenColsDataType === \"text\" ? (Math.max(2 * actualThumbsColsNum * (thumbsColWidth + paddingBetweenThumbs) - paddingBetweenThumbs, 0)) + \"px\" :\n                                                                                            (Math.max(actualThumbsColsNum * (thumbsColWidth + paddingBetweenThumbs) - paddingBetweenThumbs, 0)) + \"px\";\n                actualPlayerWidth = skinWidth - parseInt(relatedItemsWrapper.style.maxWidth, 10) - spaceBetweenPlayerAndRelatedItems;\n\n                \/\/ add\/remove columns and rearrange thumbs to fit to the actual thumbs cols num\n                rearrangeThumbs();\n            }\n            return actualPlayerWidth;\n        }\n\n        function rearrangeThumbs()\n        {\n            if (actualThumbsColsNum === 0)\n            {\n                return;\n            }\n            var totalRows = Math.ceil(config.contentPlayList.length \/ actualThumbsColsNum);\n\n            \/\/hide not needed rows\n            for (var h=0;h < config.contentPlayList.length - totalRows ;h++)\n            {\n                showOrHideThumbsRow(totalRows + h, \"hide\");\n            }\n\n            var index = 0;\n            var contentIndex = 0;\n\n            var rows = [];\n            currThumbsMatrix = [];\n            for (var i=0;i<totalRows;i++)\n            {\n                for (var j=0;j<actualThumbsColsNum;j++)\n                {\n                    var thumbUnit = new ThumbnailUnit(index, contentIndex++);\n                    rows.push(rowsArray[index]);\n                    index++;\n                }\n                currThumbsMatrix.push(rows);\n                rows = [];\n                index += params.thumbsColsNum - actualThumbsColsNum;\n\n                showOrHideThumbsRow(i, \"show\");\n            }\n\n            AddNowPlayingLabel(config.currContentIndex);\n        }\n\n        \/\/ operation - show\/hide\n        function showOrHideThumbsRow(rowIndex, operation)\n        {\n            for (var i=0;i < rowsArray.length ;i++)\n            {\n                if (rowsArray[i].rowIndex === rowIndex)\n                {\n                    rowsArray[i].thumbRow.style.display = (operation === \"show\") ? \"block\" : \"none\";\n                }\n            }\n        }\n\n        \/\/Set titles display\n        if (isDisplayMainTitle)\n        {\n            featuredVideos.innerText = (params.mainTitle && params.mainTitle.length)? params.mainTitle : 'FEATURED VIDEOS';\n        }\n        else\n        {\n            featuredVideos.innerText = '';\n        }\n\n        \/\/Set primis logo display\n        if(!params.primisLogoOn && !isDisplayMainTitle)\n        {\n            titlesTable.style.display = 'none';\n        }\n        else if(!params.primisLogoOn)\n        {\n            titlesTable.rows[0].cells[1].style.display = 'none';\n        }\n\n        function addCustomFontLinks(fontLinks)\n        {\n            if(fontLinks)\n            {\n                var linksArray = fontLinks.split(\"#!#\");\n                for (var k = 0; k < linksArray.length; k++)\n                {\n                    var head  = document.getElementsByTagName(\"head\")[0];\n                    var link  = document.createElement(\"link\");\n                    link.rel  = \"stylesheet\";\n                    link.type = \"text\/css\";\n                    link.href = linksArray[k];\n                    head.appendChild(link);\n                }\n            }\n        }\n\n        \/\/Crops the titles and descriptions to fit with requested number of lines\n        function cropTextByLines(obj1, linesNum, innerHtml, addedDots, addedTxt, width)\n        {\n            var strArray = innerHtml.split(\" \");\n\n            \/\/Calculate a single line height and everege letter width\n            obj1.style.width = 'fit-content';\n            obj1.innerHTML = \"WIwaii\";\n            var lineHeight = obj1.clientHeight;\n            var letterWidth = obj1.offsetWidth\/6;\n            var lettersNum = Math.round((width - 20)\/letterWidth);\n\n            obj1.innerHTML = \"\";\n            obj1.style.width = width;\n\n            \/\/Calculate the text height and add only the requiered words\n            for (var i = 0; i < strArray.length; i++)\n            {\n                var tmpArr = strArray.slice(0, (i+1));\n                obj1.innerHTML = tmpArr.join(\" \") + addedDots + addedTxt;\n\n                \/\/Check if we acceded lines height\n                if((lineHeight*linesNum) < obj1.clientHeight)\n                {\n                    var tmpArr = strArray.slice(0, i);\n                    var j = i;\n                    while((lineHeight*linesNum) < obj1.clientHeight)\n                    {\n                        tmpArr = strArray.slice(0, (j--));\n                        var str\n                        if(tmpArr.length)\n                        {\n                            str = tmpArr.join(\" \") + addedDots  + addedTxt;\n                            obj1.innerHTML = str;\n                        }\n                        else\n                        {\n                            var addedStr = addedDots + addedTxt;\n                            var addedTxtLength = addedStr.length;\n                            str = strArray[0].slice(0,(lettersNum - addedTxtLength))+addedStr;\n                            obj1.innerHTML = str;\n\n                            break;\n                        }\n                    }\n                    break;\n                }\n\n                \/\/All sentence is viewable\n                if(i == strArray.length-1)\n                {\n                    obj1.innerHTML = tmpArr.join(\" \") + addedTxt;\n                }\n            }\n        }\n\n        function ThumbnailUnit(i, index)\n        {\n            if (index >= config.contentPlayList.length)\n            {\n                return;\n            }\n\n            var thumbMoreAddedTxt = '';\n            rowsArray[i].imgTd.innerHTML = '';\n\n            if (params.evenColsDataType === \"text\")\n            {\n                rowsArray[i].titleContainer.innerHTML = config.contentPlayList[index].title;\n                if (params.showDescription)\n                {\n                    rowsArray[i].descriptionContainer.innerHTML = config.contentPlayList[index].desc;\n                }\n            }\n\n            var img = new Image(thumbsColWidth, thumbsHeight);\n            img.src = config.contentPlayList[index].bgImg;\n\n            img.style.cursor = \"pointer\";\n            img.onImgError = function ()\n            {\n                \/\/Avoid infinity error loop\n                if(img.isImgError)\n                {\n                    img.parentNode.removeChild(img);\n                    return;\n                }\n                img.isImgError = true;\n                img.src = defaultImgSrc;\n            }\n            img.addEventListener('error', img.onImgError);\n            rowsArray[i].imgTd.appendChild(img);\n\n            \/\/ handle click on read more text\n            rowsArray[i].imgCol.clkUrl = config.contentPlayList[index].clkUrl ? config.contentPlayList[index].clkUrl : \"\";\n            rowsArray[i].imgCol.fileId = config.contentPlayList[index].fileId ? config.contentPlayList[index].clkUrl : \"\";\n\n            if (isDisplayReadMore)\n            {\n                thumbMoreAddedTxt = readMoreAddedTxtOrigin;\n            }\n\n            rowsArray[i].imgCol.onclick = function ()\n            {\n                onVideoClick();\n            }\n            rowsArray[i].txtTd.onclick = function ()\n            {\n                onVideoClick();\n            }\n\n            var onVideoClick = function()\n            {\n                if (config.adIsPlaying)\n                {\n                    return;\n                }\n                config.nextContentIndex = index;\n                config.intentInitiator = 'userSwitchContentFS';\n                config.bus.triggerNote('intentOn');\n                config.bus.triggerNote('onUserEvent', {type: 'onPlay'});\n                config.bus.triggerNote('userSwitchContent');\n            }\n            this.cropTexts = function(){\n                var unitWidth = thumbsColWidth;\n\n                if(config.contentPlayList[index].desc && config.contentPlayList[index].desc.length && params.showDescription)\n                {\n                    cropTextByLines(rowsArray[i].titleContainer, params.descriptionLinesToCropAfter, config.contentPlayList[index].title, strBreakAddedTxt, '', unitWidth);\n                    cropTextByLines(rowsArray[i].descriptionContainer, (params.titleLinesToCropAfter - 1), config.contentPlayList[index].desc, strBreakAddedTxt, thumbMoreAddedTxt, unitWidth);\n                }\n                else\n                {\n                    cropTextByLines(rowsArray[i].titleContainer, params.titleLinesToCropAfter, config.contentPlayList[index].title, strBreakAddedTxt, thumbMoreAddedTxt, unitWidth);\n                }\n            }\n            if (params.evenColsDataType === \"text\")\n            {\n                this.cropTexts();\n            }\n        }\n\n        function AddNowPlayingLabel(currVideoIndex)\n        {\n            if (currVideoIndex === undefined || actualThumbsColsNum === 0)\n            {\n                return;\n            }\n            var row = Math.floor((currVideoIndex) \/ actualThumbsColsNum);\n            var col = currVideoIndex - row * actualThumbsColsNum;\n\n            \/\/remove now playing label from previous video\n            if (prevContent)\n            {\n                prevContent[\"nowPlayingDiv\"].style.display = \"none\";\n            }\n            \/\/add now playing label to current video\n\t        currThumbsMatrix[row][col][\"nowPlayingDiv\"].style.display = config.playerTemplateData.isShowPlaylistNowPlaying == 1 ? \"block\" : \"none\";\n            prevContent = currThumbsMatrix[row][col];\n        }\n\n        function generateThums()\n        {\n            rowsArray = [];\n\n            var totalRows = config.contentPlayList.length;\n\n            \/\/Generate thumbs HTML objects\n            for (var i = 0; i < totalRows; i++)\n            {\n                \/\/ Create an empty <tr> element and add it to the 1st position of the table:\n                var row = relatedItemsTable.insertRow(i);\n                var totalRowCells = actualThumbsColsNum * 2;\n                var rows = [];\n\n                for (var j = 0; j < totalRowCells; j+=2)\n                {\n                    var cellj = row.insertCell(j);\n                    var cellj2 = row.insertCell(j+1);\n\n                    cellj.className = \"contentTd\";\n                    cellj2.className = \"contentTd\";\n\n                    var txtContainer = document.createElement('div');\n                    var titleContainer = document.createElement('div');\n                    var descriptionContainer = document.createElement('div');\n\n                    var imgContainerDiv = document.createElement('div');\n                    imgContainerDiv.style.position = 'relative';\n                    imgContainerDiv.style.width = thumbsColWidth + \"px\";\n                    var imgDiv = document.createElement('div');\n\n\n                    var nowPlayingDiv = document.createElement('div');\n                    nowPlayingDiv.innerHTML = nowPlayingHtml;\n                    var coverBoxDiv = document.createElement('div');\n                    coverBoxDiv.innerHTML = coverBoxHtml;\n                    nowPlayingDiv.appendChild(coverBoxDiv);\n                    nowPlayingDiv.style.display = \"none\";\n                    imgContainerDiv.appendChild(nowPlayingDiv);\n\n                    var playBtnDiv = document.createElement('div');\n                    playBtnDiv.innerHTML = playBtnSvg;\n                    playBtnDiv.style.position = 'absolute';\n                    playBtnDiv.style.width = '25px';\n                    playBtnDiv.style.height = '25px';\n                    playBtnDiv.style.top = '50%';\n                    playBtnDiv.style.left = '50%';\n                    playBtnDiv.style.transform = 'translate(-50%, -50%)';\n                    playBtnDiv.style.pointerEvents = 'none';\n\n                    titleContainer.classList.add(\"thumbnail-title\");\n                    descriptionContainer.classList.add(\"thumbnail-desc\");\n                    txtContainer.appendChild(titleContainer)\n                    txtContainer.appendChild(descriptionContainer)\n                    imgContainerDiv.appendChild(imgDiv)\n                    imgContainerDiv.appendChild(playBtnDiv)\n                    cellj.appendChild(imgContainerDiv)\n\n                    cellj.style.paddingRight = paddingBetweenThumbs + \"px\";\n                    cellj2.style.paddingRight = paddingBetweenThumbs + \"px\";\n\n                    if (params.evenColsDataType === \"thumbs\" && j === totalRowCells-2)\n                    {\n                        \/\/ last column has no padding to the right\n                        cellj.style.paddingRight = \"0px\";\n                    }\n\n                    txtContainer.style.cursor = \"pointer\";\n                    txtContainer.style.width = thumbsColWidth + \"px\";\n                    txtContainer.style.height = thumbsHeight + \"px\";\n\n                    if (i !== (totalRows-1))\n                    {\n                        cellj.style.paddingBottom = paddingBetweenThumbs + \"px\";\n                        cellj2.style.paddingBottom = paddingBetweenThumbs + \"px\";\n                    }\n\n                    cellj2.appendChild(txtContainer);\n\n                    if (params.evenColsDataType === \"thumbs\")\n                    {\n                        cellj2.style.display = \"none\";\n                    }\n                    var thumbObj = {imgTd:imgDiv, playBtn:playBtnDiv, imgCol:cellj, txtTd:cellj2, txtContainer:txtContainer, titleContainer:titleContainer, descriptionContainer:descriptionContainer,\n                        nowPlayingDiv:nowPlayingDiv, thumbRow:row, rowIndex:i};\n\n                    rowsArray.push(thumbObj);\n                    rows.push(thumbObj);\n\n                }\n                currThumbsMatrix.push(rows);\n            }\n\n            \/\/set thumbnails actual content\n            for (i = 0; i < config.contentPlayList.length; i++)\n            {\n                var thumbUnit = new ThumbnailUnit(i, 0);\n            }\n        }\n\n        generateThums();\n        \/\/Timeout is needed for IE that haz a delay in rendering the HTML\n        setTimeout(function()\n        {\n\n            calcPlayerSize();\n            rearrangeThumbs();\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n            AddNowPlayingLabel(config.currContentIndex);\n        },10);\n\n\n        \/\/Size change detector\n        setInterval(function ()\n        {\n            if (largeUnitWidth != config.containerDiv.clientWidth && !config.FSservice.isFullscreen)\n            {\n                largeUnitWidth = config.containerDiv.clientWidth;\n                calcPlayerSize();\n            }\n        }, 10);\n\n        \/\/Objects merging func\n        function merge2Objs(obj, src)\n        {\n            for (var key in src)\n            {\n                if (src.hasOwnProperty(key))\n                {\n                    obj[key] = src[key];\n                }\n            }\n            return obj;\n        }\n\n        function getDisplayStateByContent(paramsField)\n        {\n            return (paramsField.trim().length == 0) ? false : true;\n        }\n\n        config.bus.addCallBack(\"adStarted\", function(val)\n        {\n            config.nativeSkinIframe.style.opacity = '0.3';\n        });\n        config.bus.addCallBack(\"adCompleted\", function(val)\n        {\n            config.nativeSkinIframe.style.opacity = '1';\n            config.nativeSkinIframe.style.backfaceVisibility = 'hidden'; \/\/ needed for chrome opacity transitions\n        });\n\n        config.bus.addCallBack(\"onNextContentInited\", function(val)\n        {\n            clkUrl = '';\n            fileId = '';\n            AddNowPlayingLabel(config.currContentIndex);\n            if (getDisplayStateByContent(config.playerTemplateData.goToArticleText) &&\n                val.content.clkUrl && val.content.clkUrl.length)\n            {\n                clkUrl = val.content.clkUrl;\n                fileId = val.content.fileId;\n            }\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n        });\n\n        \/\/ for correct positioning in flow\n        config.bus.addCallBack(\"onFlowStatusChange\", function(val)\n        {\n            if ((config.debugInformation.indexOf(\"playerWoFrames\") != -1 && config.debugInformation.indexOf(\"\/ on\") != -1) || config.pubUrl.toLowerCase().indexOf(\"newpolicy\") != -1)\n            {\n                playerIframeDiv.style.top = 'auto';\n                playerIframeDiv.style.left = 'auto';\n\n                setTimeout(function()\n                {\n                    if(!val)\n                    {\n                        \/\/ reset absolute position of the player in skin when return from flow\n                        playerIframeDiv.style.zIndex = 1;\n                        var rect = vidPlaceHolder.getBoundingClientRect();\n                        playerIframeDiv.style.top = rect.top+'px';\n                        playerIframeDiv.style.left = rect.left+'px';\n                        playerIframeDiv.style.position = 'absolute';\n                    }\n                },1)\n            }\n            else\n            {\n                playerIframe.style.top = 'auto';\n                playerIframe.style.left = 'auto';\n\n                setTimeout(function()\n                {\n                    if(!val)\n                    {\n                        \/\/ reset absolute position of the player in skin when return from flow\n                        playerIframe.style.zIndex = 1;\n                        var rect = vidPlaceHolder.getBoundingClientRect();\n                        playerIframe.style.top = rect.top+'px';\n                        playerIframe.style.left = rect.left+'px';\n                        playerIframe.style.position = 'absolute';\n                    }\n                },1)\n            }\n        });\n\n\n        config.bus.addCallBack(\"onPlayerResize\", function(val)\n        {\n            if(config.flowStatus || config.FSservice.isFullscreen)return;\n            vidPlaceHolder.style.width = val.playerWidth +'px';\n            vidPlaceHolder.style.height = val.playerHeight +'px';\n\n            \/\/ need to first limit relatedItems height and only then update nativeSkinIframe height with the updated height of largeUnit\n            relatedItemsWrapper.style.maxHeight = val.playerHeight + \"px\";\n\n            config.nativeSkinIframe.style.height = largeUnit.clientHeight + 'px';\n            config.containerDiv.style.height = largeUnit.clientHeight + 'px';\n        });\n\n        primisLogo.onclick = function()\n        {\n            window.top.open('https:\/\/www.primis.tech?utm_source='+config.domain+'&utm_medium='+config.nativeSkinType+'&utm_campaign=promoted', \"_blank\");\n        }\n\n    }\n<\/script>");

			if (false)
			{
				playerIframeDiv = baseIframe.ownerDocument.getElementById('native_playerSekindoSPlayer5f36a5ceeb98c');
			}
			else
			{
				playerIframe = baseIframe.ownerDocument.getElementById('native_playerSekindoSPlayer5f36a5ceeb98c');
			}

		}
	}
	catch (e)
	{}
// <script type="text/javascript">
	try {
		if (typeof window.Sekindo == 'undefined')
			window.Sekindo = {};
		if (typeof window.Sekindo.companyLiveDomain == 'undefined')
			window.Sekindo.companyLiveDomain = 'live.sekindo.com';
		if (typeof window.Sekindo.companyHbDomain == 'undefined')
			window.Sekindo.companyHbDomain = 'hb.sekindo.com';
		if (typeof window.Sekindo.companyVideoDomain == 'undefined')
			window.Sekindo.companyVideoDomain = 'video.sekindo.com';
	} catch (e) {}
/**
 * Created by tamirg on 10/04/2018.
 */
// <script type="text/javascript">

function SupportDetection()
{
    var clientInfo = {"extra":{"schemaVer":"11","os":"Windows","osVersion":"10.0","osVersionMajor":"10","osVersionMinor":"0","deviceManufacturer":"","deviceModel":"","deviceCodeName":"","deviceType":"desktop","browser":"Chrome","browserType":"browser","browserVersion":"80.0.3987.122","browserVersionMajor":"80","browserVersionMinor":"0"},"browser":"chrome","os":"windows","osVer":"","deviceType":"desktop"};

    var isDesktop = (clientInfo.deviceType === 'desktop');
    var detectedChromeVersion = (clientInfo.browser === 'chrome' ? parseFloat(clientInfo.extra.browserVersion) : false);
    var detectedAndroidVersion = (clientInfo.os === 'android' ? parseFloat(clientInfo.extra.osVersion) : false);
    var detectedIosVersion = (clientInfo.os === 'ios' ? parseFloat(clientInfo.extra.osVersion) : false);
    //var isPinterest = (clientInfo.browser == 'papp');
    var forceMP4 = false; //isPinterest && (clientInfo.os === 'ios');

    var supportHTML5Video = (function()
    {
        try
        {
            return (typeof(document.createElement('video').canPlayType) != 'undefined');
        }
        catch(e)
        {
            return undefined;
        }
    }());

    /**
     * Whether the browser has built-in HLS support.
     */
    var supportsNativeHls = (function()
    {
        // native HLS is definitely not supported if HTML5 video isn't
        //returns false or undefined
        if(!supportHTML5Video)return supportHTML5Video;

        /*
		 Android 2.3 (Gingerbread)
		 No Support, despite being the most popular version of Android
		 Android 3.0 (Honeycomb)
		 Streams cause tablet devices to crash
		 Android 4.0 (Ice Cream Sandwich)
		 VOD streams do not seek
		 Aspect ratios are not detected and cause image deformation
		 Fullscreen causes videos to restart from the beginning
		 Android 4.1+ (Jelly Bean)
		 Aspect ratio issue is fixed, but seek is still unavailable
		 Chrome does not understand HLS leading to broken mimetype detection
		 Taking video fullscreen causes devices to throw an error and stop.
		*/
        if(detectedAndroidVersion)return false;//if(detectAndroidVersion && detectAndroidVersion < 5 )return false;
        /*
		 Android 6 has problems with seeking on hls causing black screen untill next keyfame loaded - so for now we avoid native hls on android.
		*/
        //if(detectAndroidVersion)return false;

        //Android Chrome version is smaller then 53 - therefore autoplay is not supported.
        if(detectedChromeVersion && detectedChromeVersion < 53)return false;

        /*
		IOS versions lower then 10.3 block multiple players from running at the same time on the same page
		IOS versions lower then 9 do not support autoplay and playinline
		 */
        if(detectedIosVersion && detectedIosVersion < 10.3 )return false;

        // HLS manifests can go by many mime-types
        var canPlay = [
            // Apple santioned
            'application/vnd.apple.mpegurl',
            // Apple sanctioned for backwards compatibility
            'audio/mpegurl',
            // Very common
            'audio/x-mpegurl',
            // Very common
            'application/x-mpegurl',
            // Included for completeness
            'video/x-mpegurl',
            'video/mpegurl',
            'application/mpegurl'
        ];

        try
        {
            var video = document.createElement('video');
            return canPlay.some(function(canItPlay) {
                return (/maybe|probably/i).test(video.canPlayType(canItPlay));
            });
        }
        catch(e)
        {
            return undefined;
        }
    }());

    var supportsHlsJs = (function()
    {
        if (!(!!window.Hls)) return false;
        try
        {
            var mediaSource = window.MediaSource || window.WebKitMediaSource;
            var sourceBuffer = window.SourceBuffer || window.WebKitSourceBuffer;
            var isTypeSupported = mediaSource && typeof mediaSource.isTypeSupported === 'function' && mediaSource.isTypeSupported('video/mp4; codecs="avc1.42E01E,mp4a.40.2"');

            // if SourceBuffer is exposed ensure its API is valid
            // safari and old version of Chrome doe not expose SourceBuffer globally so checking SourceBuffer.prototype is impossible
            var sourceBufferValidAPI = !sourceBuffer || sourceBuffer.prototype && typeof sourceBuffer.prototype.appendBuffer === 'function' && typeof sourceBuffer.prototype.remove === 'function';
            return !!isTypeSupported && !!sourceBufferValidAPI;
        }
        catch (e)
        {
            return undefined;
        }
    })();

    var detectHlsType = (function()
    {
        if (forceMP4)
        {
            return '00';
        }
        else if (supportsNativeHls === undefined)
        {
            return '-1';
        }
        else if (supportsNativeHls)
        {
            return 'native';
        }
        else if (supportsHlsJs)
        {
            return 'hlsJs';
        }
        return '0';
    })();


    var gdprInfo = {
		v1: {
			consent: '',
			isWePass: '1',
			handler: null
		},
		v2: {
			consent: '',
			isWePass: '1',
			handler: null
		},
		getConsentString: function () {
			if (this.v2.consent)
				return this.v2.consent;
			else if (this.v1.consent)
				return this.v1.consent;
			else
				return '';
		},
		getConsentVersion: function () {
			if (this.v2.consent)
				return 2;
			else if (this.v1.consent)
				return 1;
			else
				return 0;
		},
		getIsWePass: function () {
			if (this.v2.consent)
				return this.v2.isWePass;
			else
				return this.v1.isWePass;
		}
	};
	
	var ccpaInfo = {
		consent: '',
		isRejected: '0',
		handler: null
	};
	
	var detectPlayerType = (function()
    {
        if (detectedIosVersion !== false && detectedIosVersion > 9 && detectedIosVersion < 10.3)
        {
            // ios specific versions
            return 'iosWrapper';
        }

        return 'native';
    })();

    return {
		hlsType: detectHlsType,
		playerType: detectPlayerType,
		gdprInfo: gdprInfo,
		ccpaInfo: ccpaInfo
    }

}
var supportDetection = SupportDetection();

function SekindoVideoManager(e){var t=this;return this.config=e,this.quality=!1,this.runningQuality=!1,this.singleQualityPlayer=!0,this.config.isStreamingVideo=!1,this.listenersArray=[],this.syncPlayersTimeFunc=this.syncPlayersTime.bind(this),this.vidWrapper=this.config.videoIFrameDoc.createElement("div"),this.vidWrapper.style.width="100%",this.vidWrapper.style.height="100%",this.defineVidWrapperProperties(),this.videoElement=this.generateVideoElement(),this.wrapVideoElement(),this.vidWrapper.appendChild(this.videoElement),this.config.bus.addCallBack("onFullScreen",function(e){t.swapVideoElement(e.type)}),this.vidWrapper}function LayoutManager(e){var t=this;this.config=e,this.reportFs=1,this.isPlaying=!1,this.intentStatus=!1,this.config.isCaptionsOn=this.config.playerTemplateData.isCaptionsOn,this.config.onViewabilityChange.addCallback(function(e){!1!==e||"flow"===t.config.playerMode||t.config.soundEnabledByUser||t.intent("intentOff")});try{this.config.playerIframe.setAttribute("allowFullScreen",""),this.config.playerIframe.setAttribute("allowfullscreen","")}catch(e){}return this.config.allowFullScreen=this.config.allowFullScreen&&SekindoUtils.isFriendlyIframe()&&SekindoServices.fullscreen.enabled&&("flow"==this.config.playerMode||"normal"==this.config.playerMode||"sticky"==this.config.playerMode),this.activeButtons="captionsOnBtn,captionsOffBtn,closeBtn"+(this.config.playerTemplateData.isPrimisLogo?",primisLogo":"")+(this.config.allowFullScreen?",normalScreenBtn,fullScreenBtn"+(this.config.playerTemplateData.isLightBox?",lightBoxCloseBtn":""):"")+(this.config.playerTemplateData.isNextBackBtns?",nextBtn,backBtn":"")+(this.config.playerTemplateData.skipXsec?",skipXsec":""),this.layoutExtraData=this.config.playerTemplateData,this.layoutExtraData.isDesktop=this.config.isDesktop,this.layoutExtraData.opacityInit="1"==this.config.isAutoPlay||"3"==this.config.isAutoPlay?"0":"1",this.layoutExtraData.allowFullScreen=this.config.allowFullScreen,this.layoutExtraData.activeButtons=this.activeButtons,this.layoutExtraData.responsive=this.config.responsive,this.layoutExtraData.isCloseBtn=this.config.isCloseBtn,this.layoutExtraData.playerMode=this.config.playerMode,this.layoutExtraData.clientInfo=this.config.clientInfo,this.layoutExtraData.minOptimalHeight=this.config.minOptimalHeight,this.layoutExtraData.verticalOrientation=this.config.verticalOrientation,this.layoutExtraData.closeBtnTheme=this.config.closeBtnTheme,this.layoutExtraData.publisherLogoPosition=this.config.publisherLogoPosition,this.layoutExtraData.absolutePath=this.config.absolutePath,this.addChilds=function(e){switch(e.destiny){case"video":this.videoDiv.appendChild(e.visual);break;case"layout":this.layoutDiv.appendChild(e.visual);break;case"videoAd":this.adDiv.appendChild(e.visual)}},this.removeChilds=function(e){var t;switch(e.destiny){case"video":t=this.videoDiv;break;case"layout":t=this.layoutDiv;break;case"videoAd":t=this.adDiv}if(e.visual)try{t.removeChild(e.visual)}catch(e){}else try{for(;t.firstChild;)t.removeChild(t.firstChild)}catch(e){}},this.createChild=function(e,t,i,n,o){t&&(i=t.ownerDocument),i||(i=document);var s=i.createElement(e);return t&&!n&&t.appendChild(s),o&&(s.id=o,this[o]=s),s},this.buildElements(),this.playerInterface(),this.layoutInterface(),this.startRunning(),this.config.calcPlayerSizes=function(e){return t.calcPlayerSizes(e)},this}function AutoSkipContent(e){this.parent=e,this.SKIP_ANIMATION_DURATION_SEC=5,this.SKIP_CONTENT_AFTER_SEC=e.config.autoSkipContentConfig.skipContentAfterSec-this.SKIP_ANIMATION_DURATION_SEC,this.STATUS_DISABLED="disabled",this.STATUS_WAITING="waiting",this.STATUS_RUNNING="running",this.STATUS_PAUSED="paused",this.STATUS_STAY="stay",this.status=e.config.autoSkipContentConfig.isEnable?this.STATUS_WAITING:this.STATUS_DISABLED,this.elapsedTime=0,this.currVideoTime=-1}function SekindoFlowManager(e){this.config=e,this.capsulesStack={},this.setCapsulesData(),this.generateCapsule("initiation")}function SekindoFlowCapsule(e,t,i){this.config=e,this.dataObj=t,this.oner=i,this.id=this.dataObj.id,this.saveObj=[],this.setCallbacks(this.dataObj.when)}function FlowCapsuleCallback(e,t){this.execute=function(i){t.config.primisConsoleLog("FlowCapsuleCallback obj="+JSON.stringify(e)),e.content&&JSON.stringify(e.content)!=JSON.stringify(i)||(this.content=e.content,t.save(e),t.then())}}function SekindoBus(){this.callbacksArray=new Array,this.setParam=this.addCallBack,this.getParam=this.triggerNote}function SekindoBusItm(){this.callbackID=null,this.callbackFunc=null}function SekindoBusNote(){this.callbackID=null,this.content=null}function SekindoAdsManager(e,t){var i=this;if(this.uniqueID=e,this.config=t,window.sekindoConfig=this.config,this.config.adsManager=this,this.config.lastImpViewableCompleteTime=0,this.config.isLastImpSkipped=!1,this.config.isLastImpViewable=!1,this.isImmediateViewablePreroll=!1,this.attemptGapTimestamp=0,this.timeOutObj=null,this.config.adsProcessPaused=!0,this.waterfallArray=[],this.config.impressionTimeout=0,this.contentVidCurrTime=-1,this.leapRoundCounter=-1,this.config.blockAdRequestsNV=!1,this.config.blockAdRequests=!1,this.processorCounter=0,this.config.adsProcessHalter=new AdsProcessHalter(this.config),this.config.cachedBids=new SekindoCachedBids(this.config,this),this.preloadedWaterfall=!1,this.epochTImestamp=(new Date).getTime(),this.isTriggerAdCompletedNormal=!0,this.canRequset2ndPreroll=!1,this.switchToAutoPlayTimer=null,this.config.requestLifetime&&this.config.requestLifetime>0&&(this.config.requestLifetimeTimeout=setTimeout(function(){i.config.blockAdRequests=!0,i.config.adsProcessPaused=!0},6e4*this.config.requestLifetime)),this.config.requestLifetimeNV&&this.config.requestLifetimeNV>0&&(this.config.requestLifetimeTimeoutNV=setTimeout(function(){i.config.blockAdRequestsNV=!0},6e4*this.config.requestLifetimeNV)),this.handleC2PWaitTime=function(e){e?0!=this.config.c2pWaitTime&&4==this.config.isAutoPlay&&null==this.switchToAutoPlayTimer&&1==this.config.onViewabilityChange.getCurrState()&&(this.switchToAutoPlayTimer=setTimeout(function(){i.switchToAutoPlayTimer=null,i.config.bus.triggerNote("onUserEvent",{type:"onPlay"})},1e3*this.config.c2pWaitTime)):null!=this.switchToAutoPlayTimer&&(clearTimeout(this.switchToAutoPlayTimer),this.switchToAutoPlayTimer=null)},this.config.gdprIsRequired&&""!=this.config.gdprInfo.getConsentString()&&void 0!==this.config.gdprImpPixel&&this.config.gdprImpPixel){var n=this.config.gdprImpPixel;this.config.gdprImpPixel="",SekindoUtils.firePixel(n,this.config.pixelDiv,this.config)}SekindoUtils.verificationAndSyncPixels(this.config.verificationAndSyncPixels,this.config.pixelDiv,this.config),this.destructProcessorOnFail=function(){i.currProcessor&&void 0!==i.currProcessor&&(i.currProcessor.destructOnFail=!0),clearTimeout(i.destructOnFailTimeout),i.destructOnFailTimeout=null},this.config.onViewabilityChange.addCallback(function(e){e&&i.config.hadImpression&&(i.config.isLastImpViewable=!0,i.config.isFirstViewablePreroll=!1),i.config.adsProcessPaused||i.config.adsProcessHalter.shouldHalt()||(i.viewableWaterfallAvailable=!1,i.loadWaterfall()),!1===e&&null!=i.destructOnFailTimeout&&i.destructProcessorOnFail(),i.handleC2PWaitTime(!0)}),this.config.waterFall&&0!=this.config.waterFall.length?this.config.responsive||this.preloadWaterfalls():this.config.bus.triggerNote("waterFallEmpty"),this.config.bus.addCallBack("onPlayerResize",function(e){i.onPlayerResize(e)}),this.config.bus.addCallBack("onVideoProgress",function(e){i.contentVidCurrTime=e.currTime,i.isPlayerSimulatorActive=e.isSimulator}),this.config.bus.addCallBack("pauseAdsSchedule",function(e){i.pauseAdsSchedule(e)}),this.config.bus.addCallBack("resumeAdsSchedule",function(e){i.resumeAdsSchedule(e)}),this.config.bus.addCallBack("resetAdsSchedule",function(e){i.resetAdsSchedule(e)}),this.config.bus.addCallBack("setIsAutoPlay",function(e){i.setIsAutoPlay(e)}),this.config.bus.addCallBack("onUserEvent",function(e){i.onUserEvent(e)}),this.setAdsSchedule(!0),this.config.isDesktop||this.config.onVisibilityChange.addCallback(function(e){if(i.currAdUnit)if(e){if(i.config.isPlaying&&i.currAdUnit.videoElement&&i.currAdUnit.videoElement.paused&&"none"!=i.currAdUnit.videoElement.parentNode.style.display){var t=i.currAdUnit.videoElement.play();if(t)try{t.then(function(){}).catch(function(e){})}catch(e){}}}else i.currAdUnit.videoElement&&!i.currAdUnit.videoElement.paused&&i.currAdUnit.videoElement.pause()}),this.config.responsive||"slider"==this.config.playerMode||"inRead"==this.config.playerMode||"inUnit"==this.config.playerMode?this.config.bus.addCallBack("onPlayerResize",function(){i.config.bus.triggerNote("adsManagerInited")}):this.config.bus.triggerNote("adsManagerInited"),this.handleC2PWaitTime(!0)}function SekindoWaterfallLoader(e,t){var i=this;this.config=e,this.adsProgram={},this.settings=t,this.adsProgramLoaded=!1,this.waterfallUrl=this.config.waterFall;var n=/[?|&](x=\d*)/.exec(this.waterfallUrl),o=/[?|&](y=\d*)/.exec(this.waterfallUrl),s=t.requestOnly?t.viewable:this.config.onViewabilityChange.getCurrState(),a=s?1:!1===s?0:-1,r=t.requestOnly?t.width:this.config.videoWidth||this.config.width,l=t.requestOnly?t.height:this.config.adVideoHeight||this.config.height;n&&n.length>1&&(this.waterfallUrl=this.waterfallUrl.replace(n[1],"x="+r)),o&&o.length>1&&(this.waterfallUrl=this.waterfallUrl.replace(o[1],"y="+l)),this.waterfallUrl=this.waterfallUrl.replace("${VP_VIEWABILITY_STATE}",a),t.gdprIsRequired&&(this.waterfallUrl+="&gdpr="+t.gdprIsRequired+"&gdprConsent="+encodeURIComponent(t.gdprConsent)+"&isWePassGdpr="+t.gdprIsWePass),t.ccpaIsRequired&&(this.waterfallUrl+="&ccpa="+t.ccpaIsRequired+"&ccpaConsent="+encodeURIComponent(t.ccpaConsent)),this.setWaterfall=function(){this.adsXmlhttp=new XMLHttpRequest,this.adsXmlhttp.addEventListener("load",function(e){i.adsProgramLoaded=!0;try{var n=JSON.parse(i.adsXmlhttp.responseText);i.wfGeneralParams=n,i.limitedImpressions=0,i.adsProgram=n.ads||[];for(var o=0;o<i.adsProgram.length;o++)i.adsProgram[o].impressionCount={val:0},parseInt(i.adsProgram[o].maxImpressions)>0&&i.limitedImpressions++;if(i.adsProgram.settings=i.settings,i.adsProgram.sspInfo=n.sspInfo,i.config.impressionTimeout=n.impressionTimeout?n.impressionTimeout:0,i.waterFallLifeTime=n.waterFallLifeTime?parseFloat(n.waterFallLifeTime):3e5,i.waterFallLifeTime>0&&(i.waterFallLifeTimeOut&&clearTimeout(i.waterFallLifeTimeOut),i.waterFallLifeTimeOut=setTimeout(function(){i.setWaterfall()},i.waterFallLifeTime)),n.initJs)for(var s in n.initJs){var a=n.initJs[s];SekindoUtils.loadExternalJs(a)}i.waterfallGap=n.adsSchedule,i.debugWFManagerId=n.debugWFManagerId,t.requestOnly||i.config.adsManager.currWaterfall!=i||(i.adsProgram.length||setTimeout(function(){i.config.bus.triggerNote("waterFallEmpty")},3),i.config.adsManager.newAdsProgram=i.adsProgram,i.config.adsManager.waterfallGap=i.waterfallGap,i.config.adsManager.setAdsSchedule(!0),i.config.adsManager.executeAdsSchedule())}catch(e){i.adsProgram=[],t.requestOnly||i.config.adsManager.currWaterfall!=i||i.config.bus.triggerNote("waterFallEmpty"),setTimeout(function(){i.setWaterfall()},3e5)}},!1),this.adsXmlhttp.addEventListener("error",function(e){t.requestOnly||i.config.adsManager.currWaterfall!=i||i.config.bus.triggerNote("waterFallEmpty"),i.config.adsProcessPaused||i.config.adsProcessHalter.shouldHalt()||setTimeout(function(){i.setWaterfall()},2e3)},!1),this.adsXmlhttp.addEventListener("abort",function(e){t.requestOnly||i.config.adsManager.currWaterfall!=i||i.config.bus.triggerNote("waterFallEmpty"),i.config.adsProcessPaused||i.config.adsProcessHalter.shouldHalt()||setTimeout(function(){i.setWaterfall()},2e3)},!1),this.sendRequest()},this.setWaterfall()}function SekindoWaterfallLinearProcessor(e,t,i){this.config=e,this.params=t,this.parent=i,this.adUnitsArray=[],this.index=-1,this.status="init",this.debugId=this.parent.processorCounter++,this.initTimestamp=(new Date).getTime(),this.init()}function SekindoA9Bidder(e,t,i,n){if(this.params=t,this.config=e,this.adUnitCode=n,this.cbFunction=i,this.cpmMap={v_18p0veo:.25,v_whiqkg:.5,v_1t86tq8:.75,v_8mhnnk:1,v_11hbfgg:1.25,v_m7xreo:1.5,v_1kmjev4:1.75,v_bod6v4:2,v_1gqp3i8:2.25,v_sbotts:2.5,v_1v146ps:2.75,v_3rorgg:3,v_17633sw:3.25,v_ir2u4g:3.5,v_1nteqrk:3.75,v_dhajuo:4,v_1bvw7b4:4.25,v_y0gi68:4.5,v_1qva9z4:4.75,v_69l3wg:5,v_123sikg:5.25,v_pwadq8:5.5,v_1ir45j4:5.75,v_9sxxj4:6,v_1ev9u68:6.25,v_sy5wxs:6.5,v_1y0htkw:6.75,v_17aio0:7,v_14lov0g:7.25,v_lqggzk:7.5,v_1ofvtvk:7.75,v_h5n668:8,v_1a0gxz4:8.25,v_w518u8:8.5,v_1ujmwao:8.75,v_6w270g:9,v_zqvytc:9.25,v_njdtz4:9.5,v_1ka1x4w:9.75,v_czt9fk:10,v_1fe02rk:10.25,v_qyzt34:10.5,v_1w1bpq8:10.75,v_33yq68:11,v_186amtc:11.25,v_jrad4w:11.5,v_1lrqqkg:11.75,v_ehi2v4:12,v_1b8660w:12.25,v_z0o16o:12.5,v_1rvhszk:12.75,v_4ww35s:13,v_13bhqm8:13.25,v_pg21hc:13.5,v_1iavta8:13.75,v_b0n5kw:14,v_1d13j0g:14.25,v_u5v4zk:14.5,v_1xk9hc0:14.75,v_r26f4:15,v_15te328:15.25,v_kdrg8w:15.5,v_1pg3cw0:15.75,v_ghx4w0:16,v_19cqwow:16.25,v_x58ruo:16.5,v_1shyw3k:16.75,v_7w9q0w:17,v_10r3hts:17.25,v_mvnsow:17.5,v_1la9g5c:17.75,v_bn48ow:18,v_1gpg5c0:18.25,v_safvnk:18.5,v_1vou800:18.75,v_4fesqo:19,v_16fv668:19.25,v_i0uwhs:19.5,v_1n36t4w:19.75,v_e50l4w:20,v_xkun0g:20.5,v_5tz8qo:21,v_qd5728:21.5,v_8vury8:22,v_tf0q9s:22.5,v_1o5c00:23,v_licav4:23.5,v_hmhzi8:24,v_v7y39c:24.5,v_7cx0cg:25,v_o08nb4:25.5,v_ck7e9s:26,v_rjlgxs:26.5,v_2amf40:27,v_ixy22o:27.5,v_f23qps:28,v_ywapkw:28.5,v_5hhr0g:29,v_ompqf4:29.5,v_a7auio:30,v_bgb9c:31,v_fktzb4:32,v_8d4jcw:33,v_c3z20w:34,v_3ibn5s:35,v_dpepz4:36,v_6hpa0w:37,v_9jkt8g:38,v_1mwdts:39,v_gwa1vk:40,v_6yvbwg:41,v_d2mebk:42,v_2t1f5s:43,v_evjrb4:44,v_4lys5c:45,v_appukg:46,v_xm5ts:47,v_g6ztvk:48,v_8abegw:49,v_bc6xog:50,v_1q236yo:.25,v_38h9ts:.5,v_15ix8n4:.75,v_r3icqo:1,v_1x9smww:1.25,v_cy3280:1.5,v_1dklgqo:1.75,v_nhnmrk:2,v_1hgfs3k:2.25,v_6ubzsw:2.5,v_13pzvnk:2.75,v_vyb8xs:3,v_1rl0ykg:3.25,v_gyx69s:3.5,v_1axpbls:3.75,v_loq9s0:4,v_1mb8oao:4.25,v_15kbgg:4.5,v_17bulmo:4.75,v_swfpq8:5,v_1wsbchs:5.25,v_9ypfcw:5.5,v_1g4zpj4:5.75,v_q21vk0:6,v_1k0u0w0:6.25,v_6cupds:6.5,v_10bmups:6.75,v_y3q3nk:7,v_1tqfta8:7.25,v_dkk5c0:7.5,v_1ag816o:7.75,v_ipcmww:8,v_1ovmx34:8.25,v_3pyk8w:8.5,v_14cgyrk:8.75,v_seyfb4:9,v_1yl8phc:9.25,v_brmscg:9.5,v_1e22r5s:9.75,v_mb7cw0:10,v_1jd3zls:10.25,v_8r07b4:10.5,v_12pscn4:10.75,v_wm1a80:11,v_1qktfk0:11.25,v_fypn9c:11.5,v_1cfe51c:11.75,v_koiqrk:12,v_1myypkw:12.25,v_5csg0:12.5,v_16bn2m8:12.75,v_ut3x8g:13,v_1vfmbr4:13.25,v_a9xyww:13.5,v_1gg8934:13.75,v_opcutc:14,v_1l61clc:14.25,v_505on4:14.5,v_10mve9s:14.75,v_yeyn7k:15,v_1sdqsjk:15.25,v_fh8cu8:15.5,v_19g0i68:15.75,v_jd2o74:16,v_1pjcydc:16.25,v_2pr18g:16.5,v_15u5s74:16.75,v_reqwao:17,v_1xl16gw:17.25,v_cfctmo:17.5,v_1d1v85c:17.75,v_o7vke8:18,v_1i6npq8:18.25,v_7kjxfk:18.5,v_1379n28:18.75,v_vfl0cg:19,v_1rw9i4g:19.25,v_ha5pts:19.5,v_1b8xv5s:19.75,v_l6016o:20,v_255dds:20.5,v_tw0rnk:21,v_9cutc0:21.5,v_qa61og:22,v_5r03cw:22.5,v_xhvhmo:23,v_e7npj4:23.5,v_i3i0w0:24,v_3y2qdc:24.5,v_rt3ta8:25,v_b5s6bk:25.5,v_nasetc:26,v_8bec5c:26.5,v_x0e77k:27,v_gd2k8w:27.5,v_k8wvls:28,v_yp3i8:28.5,v_udi22o:29,v_aoavwg:29.5,v_p3prsw:30,v_zejp4w:31,v_jl6ubk:32,v_qswa9s:33,v_nm0ydc:34,v_vnp6gw:35,v_m5l340:36,v_tdaj28:37,v_prft34:38,v_y83f9c:39,v_ieqkg0:40,v_sr4ohs:41,v_mndm2o:42,v_wczegw:43,v_kug934:44,v_uk21hc:45,v_ogaz28:46,v_yxdn9c:47,v_j40sg0:48,v_rkoem8:49,v_nyton4:50},void 0==this.config.a9bidderInit){try{window.apstag.init({pubID:this.params.pubID,adServer:"googletag"})}catch(e){}this.config.a9bidderInit=!0}this.getBids=function(e){var t={};if(e.length>0&&void 0!=e[0].amzniid&&void 0!=e[0].amznbid){void 0==this.cpmMap[e[0].amznbid]&&(this.cpmMap[e[0].amznbid]=5);var i=this.cpmMap[e[0].amznbid],n=(new Date).getTime().toString(),o="https://aax.amazon-adsystem.com/e/dtb/vast?b="+e[0].amzniid+"&rnd="+n+"&pp="+e[0].amznbid;t[this.adUnitCode]={bids:[{vastUrl:o,cpm:i,ttl:0}]}}this.cbFunction("amazon",t)},this.run=function(e){var t=this;try{window.apstag.fetchBids({slots:this.params.apstagSlots},function(e){t.getBids(e)})}catch(e){this.getBids([])}}}function SekindoCachedBids(e,t){this.parent=t,this.config=e,this.bids=[]}function SekindoAdUnit(e,t,i){var n=this;if(this.config=e,this.params=t,this.parent=i,this.reportsBlocker={},this.busItms=[],this.adProccessStatus="init",this.adType=null,this.videoEventCallback=this.onVideoEvent.bind(this),this.videoProgressEventCallback=this.onVideoProgressEvent.bind(this),this.config.cachedBids.invalidateBid(this.params.bidId),this.params.isSkipAd)this.parent.adUnitReport({type:"fail",val:this});else{this.busItms.push(this.config.bus.addCallBack("onUserEvent",function(e){n.onUserEvent(e)})),this.checkAdViewability=new SekindoServices.checkAdViewability(this.config,function(){n.reportedViewable||(n.reportedViewable=!0,SekindoUtils.trackSekindoAdEvents("viewable",null,n.params,n.config))}).execute,this.rvn=this.params.rvn;var o=this.params.vastURL;if("ima"==this.params.serveType)this.adProccessStatus="loaded",this.loadExternalSDK();else if(null!=o){var s=(new Date).getTime().toString();o=(o=(o=(o=(o=o.replace("[timestamp]",s)).replace("[CACHEBUSTING]",s)).replace("${GDPR}",this.config.gdprIsRequired)).replace("${GDPR_CONSENT}",encodeURIComponent(this.config.gdprInfo.getConsentString()))).replace("${US_PRIVACY}",encodeURIComponent(this.config.ccpaInfo.consent)),window.primisLog("[[Ad Unit]] - vastUrl: "+o),SekindoQueryVAST(o,function(e){n.adsLoaded(e)},null,this.config)}else new SekindoVASTAds(this.params.vastXml,function(e){n.adsLoaded(e)},null,this.config);this.params&&!this.params.isSkipAttemptTracking&&SekindoUtils.trackSekindoAdEvents("onAttempt",null,this.params,this.config)}}function AdsProcessHalter(e){var t=this;this.config=e,this.isHalted=!1,this.isHaltConditionsMet=function(){return!1},this.resumeFromHalt=function(){return!(!t.isHalted||!1!==t.isHaltConditionsMet())&&(t.isHalted=!1,t.config.adsManager.resumeAdsSchedule(),!0)},this.shouldHalt=function(){return!1}}function SekindoFetchXML(e,t,i,n,o){var s=new XMLHttpRequest;s.onreadystatechange=function(){if(4===s.readyState)if(200===s.status)if(null!==s.responseXML)i(s.responseXML,t);else if(null!==s.responseText){var e=s.responseText,o=function(e){if(window.ActiveXObject)(t=new ActiveXObject("Microsoft.XMLDOM")).async="false",t.loadXML(e);else var t=(new DOMParser).parseFromString(e,"text/xml");return t}(e=e.trim());o.getElementsByTagName("parsererror")[0]?(window.primisLog("[[Vast Parser]] - fetch xml failure - parse error"),n(s,t)):i(o,t)}else window.primisLog("[[Vast Parser]] - fetch xml failure - no data"),n(s,t);else window.primisLog("[[Vast Parser]] - fetch xml failure - connection fail"),n(s,t)};for(var a=!1,r=["storage.googleapis.com","aax.amazon-adsystem.com","mfx.mobilefuse.com"],l=0;l<r.length;l++){var c=r[l];if(-1!=e.indexOf(c)){a=!0;break}}s.open("GET",e,!0),a||(s.withCredentials=!0),s.send(null)}function SekindoQueryVAST(e,t,i,n,o){if(void 0==o&&(o=0),o>=MAX_WRAPPER_DEPTH)return window.primisLog("[[Vast Parser]] - arrived max depth"),void t(null);SekindoFetchXML(e,null,function(s){try{new SekindoVASTAds(s,t,i,n,o,e)}catch(e){window.primisLog("[[Vast Parser]] - fail to build"),t(null)}},function(e){t(null)},n)}function SekindoTrackingEvents(e,t){if(this.events={},this.ad=t,null!==e){if("TrackingEvents"!==e.tagName){if(1!==(e=e.getElementsByTagName("TrackingEvents")).length)return;e=e.item(0)}for(var i=e.getElementsByTagName("Tracking"),n=0;n<i.length;n++){var o=i[n].getAttribute("event");if(o){var s=null;"progress"===o&&(o+="-"+(s=i[n].getAttribute("offset"))),this.events[o]=this.events[o]||[];var a={url:i[n].textContent.replace(/\s/g,""),offset:s,event:o};this.events[o].push(a)}}}}function SekindoVASTAds(e,t,i,n,o,s){function a(e){try{if(window.ActiveXObject){return e.xml}return(new XMLSerializer).serializeToString(e)}catch(e){return window.primisLog("[[Vast Parser]] - xml parsing error"),""}}this.onAdsAvailable=t;var r=e.getElementsByTagName("Ad");if(0!=r.length){this.ads||(this.ads=new Array);for(var l=0;l<r.length;l++){var c=new SekindoVASTAd(this,r.item(l),i||null);if(c.vastStr=a(e),c.isEmpty())window.primisLog("[[Vast Parser]] - ad is empty");else{if(n.demandDebug&&n.demandDebug.length>0)for(var d=0;d<n.demandDebug.length;d++)try{if(c.vastStr&&-1!=c.vastStr.indexOf(n.demandDebug[d])||s&&-1!==s.indexOf(n.demandDebug[d])){var h="VAST keyword: "+n.demandDebug[d]+", in domain: "+n.domain+", VAST Url: "+String(s)+", VAST Response: "+String(c.vastStr);SekindoUtils.postLogMessage(h);break}}catch(e){}if(n.LogRest&&n.LogRest.performCall)try{c.reportDebugImpPixelId=Math.random(),c.debugWFManagerId=n.adsManager.currWaterfall.debugWFManagerId,n.LogRest.performCall("liveVideoWaterfall","AddVastData",[c.reportDebugImpPixelId,s,c.vastStr,"Vast-"+o.toString()],c.debugWFManagerId)}catch(e){}if(this.ads.push(c),!c.hasData()||c.hasSequence()&&!c.isNumber(1)){var p=r.item(l).getElementsByTagName("Wrapper").item(0),u=p.getElementsByTagName("VASTAdTagURI");if(0===u.length){window.primisLog("[[Vast Parser]] - no uri");continue}u=u.item(0).textContent.replace(/\s/g,"");var f;!function(e,t,i){f=function(n){if(e.onLoaded(n,t),i.onAdsAvailable){var o=i.onAdsAvailable;i.onAdsAvailable=null,o.call(i,i)}}}(c,"true"===p.getAttribute("allowMultipleAds"),this),window.primisLog("[[Vast Parser]] - digg in"),SekindoQueryVAST(u,f,c,n,o+1)}else if(t&&this.onAdsAvailable){g=this.onAdsAvailable;this.onAdsAvailable=null,g.call(this,this)}}}}else if(window.primisLog("[[Vast Parser]] - no ads available"),t){var g=this.onAdsAvailable;this.onAdsAvailable=null,g.call(this,this)}}function SekindoVASTAd(e,t,i,n){this.vast=e,this.pod=e,this.parentAd=i,this.onAdAvailable=n,this.sequence=null,this.hasContent=!0,this.loaded=!0,this.linear=null,this.id=t.id,this.impressions=[],this.currentPodAd=this,this.sentImpression=!1,this.properties={};var o,s;if(null!==this.parentAd){var a=this.parentAd;this.linear=a.linear?a.linear.copy(this):null;for(s in a.properties)a.properties.hasOwnProperty(s)&&(this.properties[s]=a.properties[s])}t.hasAttribute("sequence")&&(this.sequence=parseInt(t.getAttribute("sequence"),10));var r=t.getElementsByTagName("InLine");if(0!==r.length||(this.loaded=!1,0!==(r=t.getElementsByTagName("Wrapper")).length)){for(var l=(r=r.item(0)).firstChild;null!==l;){if(1===l.nodeType)switch(l.tagName){case"Creatives":case"InLine":case"Wrapper":case"Impression":case"Extensions":case"VASTAdTagURI":case"Error":break;default:this.properties[l.tagName]=l.textContent.replace(/^\s*|\s*$/g,"")}l=l.nextSibling}var c=r.getElementsByTagName("Impression");for(o=0;o<c.length;o++)this.impressions.push(c.item(o).textContent.replace(/\s/g,""));var d=r.getElementsByTagName("Creatives");if(0!==d.length){for(d=d.item(0).getElementsByTagName("Creative"),o=0;o<d.length;o++){for(var h=d.item(o).firstChild;null!==h&&3===h.nodeType;)h=h.nextSibling;if(null!==h){var p;switch(h.tagName){case"Linear":p=new SekindoVASTLinear(this,h),this.linear?this.linear.augment(p):this.linear=p}}}this.linear&&(this.trackings=this.linear.tracking),this.parentAd&&this.parentAd.trackings&&(this.trackings?this.trackings.augment(this.parentAd.trackings):this.trackings=this.parentAd.trackings)}}else this.hasContent=!1}function SekindoVASTLinear(e,t){this.root=t,this.clickThrough=null,this.tracking=new SekindoTrackingEvents(t,e),this.mediaFiles=[],this.duration=null,this.adParameters=null;var i,n=t.getElementsByTagName("VideoClicks");if(n.length){var o=(n=n.item(0)).getElementsByTagName("ClickThrough");for(o.length&&(this.clickThrough=o.item(0).textContent.replace(/\s/g,"")),o=n.getElementsByTagName("ClickTracking"),i=0;i<o.length;i++)this.tracking.addClickTracking(o.item(i).textContent.replace(/\s/g,""))}var s=t.getElementsByTagName("Duration");s.length&&(this.duration=this.timecodeFromString(s.item(0).textContent.replace(/\s/g,"")));if(t.getElementsByTagName("AdParameters").length)try{string=[].map.call(t.getElementsByTagName("AdParameters"),function(e){return e.textContent||e.innerText||""}).join(""),this.adParameters=string}catch(e){this.adParameters=null}var a=t.getElementsByTagName("MediaFiles");if(a.length)for(a=a.item(0).getElementsByTagName("MediaFile"),i=0;i<a.length;i++){for(var r=a.item(i),l={},c=0;c<r.attributes.length;c++)l[r.attributes[c].name]=r.attributes[c].value;l.src=a.item(i).textContent.replace(/\s/g,""),this.mediaFiles.push(l)}}function SekindoPlaylistManager(e,t){var i=this;this.uniqueID=e,this.loaderTimeout=null,this.config=t,this.videoTitle="",this.contentPlayList=t.contentPlayList,this.index=0,this.playlistMultiplierIndex=0,this.failTimeout=null,this.contentPixelFiredMap=[],this.prevVolVal=0,this.mobileVisibilityLock=!1,this.isFirstEngagementEvent=!0,this.fileId=this.contentPlayList[0]?this.contentPlayList[0].fileId:"0",this.config.bus.setParam("fileId",function(){return i.fileId}),this.playListId=this.contentPlayList[0]?this.contentPlayList[0].playListId:"0",this.config.bus.setParam("playListId",function(){return i.playListId}),this.contentMatchType=this.contentPlayList[0]?this.contentPlayList[0].contentMatch:"",this.config.bus.setParam("contentMatchType",function(){return i.contentMatchType}),this.isFirstContent=!0,this.config.bus.setParam("isFirstContent",function(){return i.isFirstContent}),this.generateVideoElement(),this.addViewabilityCallback(),window.primisLog("[[Playlist Manager]][[Hls]] - hls is supported as - "+this.config.hls),this.config.isDesktop||(this.mobileVisibilityLock=!this.config.onVisibilityChange.getCurrState(),this.config.onVisibilityChange.addCallback(function(){i.config.onVisibilityChange.getCurrState()?(i.mobileVisibilityLock=!1,i.allowPlaying&&i.playerSimulator.paused&&i.playerSimulator.currDummyProgress>0?i.playerSimulator.play():i.allowPlaying&&i.videoElement&&i.videoElement.paused&&i.videoElement.play()):(i.mobileVisibilityLock=!0,i.playerSimulator.paused?i.videoElement.src&&3!=i.videoElement.networkState&&!i.videoElement.paused&&i.videoElement.pause():i.playerSimulator.pause())})),this.config.bus.addCallBack("fireContentPixel",function(e){i.fireContentPixel(e)}),this.config.bus.addCallBack("loadNextContentBG",function(e){i.loadNextContentBG(i.index)}),this.config.bus.addCallBack("loadSwitchedContentBG",function(){i.loadSwitchedContentBG()}),this.config.bus.triggerNote("playlistInited")}function SekindoPlayerSimulator(e,t){this.uniqueID=e,this.config=t,this.currDummyProgress=0,this.paused=!0,this.src="",this.networkState=0}function SekindoDebugAgent(e){function t(e){if(!i.endSession){var t="";try{arguments.callee.caller.err=new Error("error");try{t=arguments.callee.caller.err.stack.toString()}catch(e){t=e.stack.toString()}}catch(e){}for(var o=t.split(/\r\n|\n/),s=-1==o[0].indexOf("Error")?1:2,a=0;a<s;a++)o.shift();var r=[];for(a=0;a<o.length;a++){var l="--";try{l=o[a].match(/(.*at\s+)(.*)(\s+\(http*)/)[2]}catch(e){try{l=o[a].match(/(.*)(@http*)/)[1]}catch(e){}}try{var c=o[a].match(/\:(\d+)\:\d+/)[0];r.push(l+":"+c)}catch(e){}}c=o[0].match(/\:(\d+)\:\d+/)[0];var d=JSON.stringify(r),h=JSON.stringify(i.config.clientInfo),p=(new Date).getTime(),u=new FormData;u.append("sessionId",i.config.debugSessionId),u.append("sender","player"),u.append("message",e),u.append("stack",d),u.append("timeStamp",p),u.append("lineNumber",c),u.append("userAgent",h);var f=new XMLHttpRequest;f.onreadystatechange=function(){4==this.readyState&&200==this.status&&function(e){var t=JSON.parse(e);if(!t||!t.length)return;t.sort(function(e,t){return e.time<t.time?-1:e.time>t.time?1:0});for(var o=0;o<t.length;o++)"console"==t[o].sender&&parseInt(t[o].time)>n&&(n=parseInt(t[o].time),console.log("we have a command for the player:"+t[o].content),"endSession"==t[o].content&&(i.endSession=!0))}(this.responseText)},f.open("POST",i.config.absolutePath+i.storeMsgPath,!0),f.send(u)}}var i=this;this.config=e,this.configDebug=[],this.endSession=!1,this.storeMsgPath="/debugTools/video/tests/socketConnection.php",this.externalDebugWindowURL="/debugTools/video/onSiteDebugger/debugWindow.php",this.internalDebugWindowURL="/debugTools/video/onSiteDebugger/onSiteDebugger.js",this.earlyMessagesQ=[],this.isDebuggerWindowIn=!1,this.isDebuggerWindowConstructed=!1;var n=(new Date).getTime();window.primisLog=function(e){},this.config.debugSessionId&&(window.primisLog=t),this.setDebugConfigFromWindow()}function SekindoUtils(){}function SekindoServices(){}function PlayerAPI(e,t){this.PLAYER_API_INIT_EVENT="primisPlayerInit",this.playerApiId=e,this.allowedEvents=["adStarted","adCompleted","adPlay","adPause","adSkip","adFirstQuartile","adMidQuartile","adThirdQuartile","adClickthrough","videoStart","videoEnd","videoSkip","videoClickthrough","videoTimeUpdate","volumeChange","playerModeChange"];var i=t.bus;this.addEventListener=function(e,t){return this.allowedEvents.indexOf(e)<0?null:(e="API"+e,i.addCallBack(e,t))},this.removeEventListener=function(e){i.removeBusItm(e)}}function SekindoMraid(e){function t(){function e(){window.primisLog("[[MRAID]]isViewable : "+window.top.mraid.isViewable()),i.config.appsGeometryStatus.viewable=window.top.mraid.isViewable(),window.top.mraid.isViewable()&&t&&(t=!1,i.config.isContentPlaying||i.config.bus.triggerNote("onUserEvent",{type:"onPlay"}),clearInterval(o))}var t=!0;i.config.isAppsGeometry=!0,i.config.appsGeometryStatus={viewable:!1,init:!0},window.top.mraid.addEventListener("viewableChange",function(t){e()}),"ios"===i.config.clientInfo.os&&(o=setInterval(function(){e()},1e3))}var i=this;this.config=e;var n=this.config.isAutoPlay,o=null,s=null;this.config.isAutoPlay=2,window.top.mraid?(window.primisLog("[[MRAID]] - class available - no need to load"),t()):(window.primisLog("[[MRAID]] - no class - try to load"),function(){function e(){window.top.mraid&&("loading"===window.top.mraid.getState()?window.top.mraid.addEventListener("ready",t):"default"===window.top.mraid.getState()&&t(),clearInterval(s)),window.primisLog("[[MRAID]] exists : "+window.top.mraid)}var o=window.top.document.getElementsByTagName("head").item(0),a=window.top.document.createElement("script");a.setAttribute("type","text/javascript"),a.setAttribute("src","mraid.js"),o.appendChild(a),a.onload=function(){window.primisLog("[[MRAID]] - onload"),e()},a.onerror=function(){window.primisLog("[[MRAID]] - load error"),i.config.isAutoPlay=n,1==n&&"ios"!=i.config.clientInfo.os&&i.config.bus.triggerNote("onUserEvent",{type:"onPlay"})},"ios"===i.config.clientInfo.os&&(s=setInterval(function(){e()},100))}())}function SekindoOmid(config){function fireEvent(e){switch(window.primisLog("[[OMID]] =====================================================>>>>>>>>>>>>>> "),window.primisLog("[[OMID]] fireEvent: "+e.type),e.type){case"sessionStart":break;case"sessionFinish":ref.config.appsGeometryStatus.viewable=!1,ref.config.appsGeometryStatus.inActiveView=!1;break;case"geometryChange":window.primisLog("[[OMID]] geometryChange W x H: "+e.data.adView.onScreenGeometry.width+" X "+e.data.adView.onScreenGeometry.height),ref.config.appsGeometryStatus.viewable=e.data.adView.onScreenGeometry.width>0&&e.data.adView.onScreenGeometry.height>10,ref.config.appsGeometryStatus.inActiveView="notFound"!=e.data.adView.reasons[0],window.primisLog("[[OMID]] geometryChange appsGeometryStatus.viewable: "+ref.config.appsGeometryStatus.viewable),window.primisLog("[[OMID]] geometryChange appsGeometryStatus.inActiveView: "+ref.config.appsGeometryStatus.inActiveView)}}var ref=this;this.config=config;var currWindow=window.top,ctx="undefined"==typeof global?currWindow:global,input="undefined"==typeof exports?void 0:exports,action=function(omidGlobal_js,omidExports){function contents_exporter_getOmidExports(){return void 0===omidExports?null:omidExports}function contents_exporter_getOrCreateName(e,t){return e&&(e[t]||(e[t]={}))}function contents_logger_executeLog(e,t){"undefined"!=typeof jasmine&&jasmine?e():"undefined"!=typeof console&&console&&console.error&&t()}function contents_OmidGlobalProvider_getOmidGlobal(){if(void 0!==omidGlobal_js&&omidGlobal_js)return omidGlobal_js;if("undefined"!=typeof global&&global)return global;if(void 0!==currWindow&&currWindow)return currWindow;if(void 0!==contents_OmidGlobalProvider_globalThis&&contents_OmidGlobalProvider_globalThis)return contents_OmidGlobalProvider_globalThis;throw Error("Could not determine global object context.")}function contents_serviceCommunication_getUnobfuscatedKey(e,t){return t.reduce(function(e,t){return e&&e[t]},e)}var $jscomp=$jscomp||{};$jscomp.scope={},$jscomp.inherits=function(e,t){function i(){}i.prototype=t.prototype,e.superClass_=t.prototype,e.prototype=new i,e.prototype.constructor=e;var n;for(n in t)if("prototype"!=n)if(Object.defineProperties){var o=Object.getOwnPropertyDescriptor(t,n);o&&Object.defineProperty(e,n,o)}else e[n]=t[n]},$jscomp.ASSUME_ES5=!1,$jscomp.ASSUME_NO_NATIVE_MAP=!1,$jscomp.ASSUME_NO_NATIVE_SET=!1,
$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(e,t,i){e!=Array.prototype&&e!=Object.prototype&&(e[t]=i.value)},$jscomp.getGlobal=function(e){return void 0!==currWindow&&currWindow===e?e:"undefined"!=typeof global&&null!=global?global:e},$jscomp.global=$jscomp.getGlobal(this),$jscomp.SYMBOL_PREFIX="jscomp_symbol_",$jscomp.initSymbol=function(){$jscomp.initSymbol=function(){},$jscomp.global.Symbol||($jscomp.global.Symbol=$jscomp.Symbol)},$jscomp.symbolCounter_=0,$jscomp.Symbol=function(e){return $jscomp.SYMBOL_PREFIX+(e||"")+$jscomp.symbolCounter_++},$jscomp.initSymbolIterator=function(){$jscomp.initSymbol();var e=$jscomp.global.Symbol.iterator;e||(e=$jscomp.global.Symbol.iterator=$jscomp.global.Symbol("iterator")),"function"!=typeof Array.prototype[e]&&$jscomp.defineProperty(Array.prototype,e,{configurable:!0,writable:!0,value:function(){return $jscomp.arrayIterator(this)}}),$jscomp.initSymbolIterator=function(){}},$jscomp.arrayIterator=function(e){var t=0;return $jscomp.iteratorPrototype(function(){return t<e.length?{done:!1,value:e[t++]}:{done:!0}})},$jscomp.iteratorPrototype=function(e){return $jscomp.initSymbolIterator(),e={next:e},e[$jscomp.global.Symbol.iterator]=function(){return this},e},$jscomp.makeIterator=function(e){$jscomp.initSymbolIterator();var t=e[Symbol.iterator];return t?t.call(e):$jscomp.arrayIterator(e)},$jscomp.arrayFromIterator=function(e){for(var t,i=[];!(t=e.next()).done;)i.push(t.value);return i},$jscomp.arrayFromIterable=function(e){return e instanceof Array?e:$jscomp.arrayFromIterator($jscomp.makeIterator(e))};var exports_argsChecker={assertTruthyString:function(e,t){if(!t)throw Error("Value for "+e+" is undefined, null or blank.");if("string"!=typeof t&&!(t instanceof String))throw Error("Value for "+e+" is not a string.");if(""===t.trim())throw Error("Value for "+e+" is empty string.")},assertNotNullObject:function(e,t){if(null==t)throw Error("Value for "+e+" is undefined or null")},assertNumber:function(e,t){if(null==t)throw Error(e+" must not be null or undefined.");if("number"!=typeof t||isNaN(t))throw Error("Value for "+e+" is not a number")},assertNumberBetween:function(e,t,i,n){if(exports_argsChecker.assertNumber(e,t),t<i||t>n)throw Error("Value for "+e+" is outside the range ["+i+","+n+"]")},assertFunction:function(e,t){if(!t)throw Error(e+" must not be truthy.")},assertPositiveNumber:function(e,t){if(exports_argsChecker.assertNumber(e,t),0>t)throw Error(e+" must be a positive number.")}},exports_VersionUtils={},contents_VersionUtils_SEMVER_DIGITS_NUMBER=3;exports_VersionUtils.isValidVersion=function(e){return/\d+\.\d+\.\d+(-.*)?/.test(e)},exports_VersionUtils.versionGreaterOrEqual=function(e,t){e=e.split("-")[0].split("."),t=t.split("-")[0].split(".");for(var i=0;i<contents_VersionUtils_SEMVER_DIGITS_NUMBER;i++){var n=parseInt(e[i],10),o=parseInt(t[i],10);if(n>o)break;if(n<o)return!1}return!0};var exports_ArgsSerDe={},contents_ArgsSerDe_ARGS_NOT_SERIALIZED_VERSION="1.0.3";exports_ArgsSerDe.serializeMessageArgs=function(e,t){return exports_VersionUtils.isValidVersion(e)&&exports_VersionUtils.versionGreaterOrEqual(e,contents_ArgsSerDe_ARGS_NOT_SERIALIZED_VERSION)?t:JSON.stringify(t)},exports_ArgsSerDe.deserializeMessageArgs=function(e,t){return exports_VersionUtils.isValidVersion(e)&&exports_VersionUtils.versionGreaterOrEqual(e,contents_ArgsSerDe_ARGS_NOT_SERIALIZED_VERSION)?t||[]:t&&"string"==typeof t?JSON.parse(t):[]};var exports_constants={AdEventType:{IMPRESSION:"impression",STATE_CHANGE:"stateChange",GEOMETRY_CHANGE:"geometryChange",SESSION_START:"sessionStart",SESSION_ERROR:"sessionError",SESSION_FINISH:"sessionFinish",VIDEO:"video",LOADED:"loaded",START:"start",FIRST_QUARTILE:"firstQuartile",MIDPOINT:"midpoint",THIRD_QUARTILE:"thirdQuartile",COMPLETE:"complete",PAUSE:"pause",RESUME:"resume",BUFFER_START:"bufferStart",BUFFER_FINISH:"bufferFinish",SKIPPED:"skipped",VOLUME_CHANGE:"volumeChange",PLAYER_STATE_CHANGE:"playerStateChange",AD_USER_INTERACTION:"adUserInteraction"},VideoEventType:{LOADED:"loaded",START:"start",FIRST_QUARTILE:"firstQuartile",MIDPOINT:"midpoint",THIRD_QUARTILE:"thirdQuartile",COMPLETE:"complete",PAUSE:"pause",RESUME:"resume",BUFFER_START:"bufferStart",BUFFER_FINISH:"bufferFinish",SKIPPED:"skipped",VOLUME_CHANGE:"volumeChange",PLAYER_STATE_CHANGE:"playerStateChange",AD_USER_INTERACTION:"adUserInteraction"},ErrorType:{GENERIC:"generic",VIDEO:"video"},AdSessionType:{NATIVE:"native",HTML:"html"},EventOwner:{NATIVE:"native",JAVASCRIPT:"javascript",NONE:"none"},AccessMode:{FULL:"full",LIMITED:"limited"},AppState:{BACKGROUNDED:"backgrounded",FOREGROUNDED:"foregrounded"},Environment:{MOBILE:"app"},InteractionType:{CLICK:"click",INVITATION_ACCEPT:"invitationAccept"},MediaType:{DISPLAY:"display",VIDEO:"video"},Reason:{NOT_FOUND:"notFound",HIDDEN:"hidden",BACKGROUNDED:"backgrounded",VIEWPORT:"viewport",OBSTRUCTED:"obstructed",CLIPPED:"clipped"},SupportedFeatures:{CONTAINER:"clid",VIDEO:"vlid"},VideoPosition:{PREROLL:"preroll",MIDROLL:"midroll",POSTROLL:"postroll",STANDALONE:"standalone"},VideoPlayerState:{MINIMIZED:"minimized",COLLAPSED:"collapsed",NORMAL:"normal",EXPANDED:"expanded",FULLSCREEN:"fullscreen"},NativeViewKeys:{X:"x",Y:"y",WIDTH:"width",HEIGHT:"height",AD_SESSION_ID:"adSessionId",IS_FRIENDLY_OBSTRUCTION_FOR:"isFriendlyObstructionFor",CLIPS_TO_BOUNDS:"clipsToBounds",CHILD_VIEWS:"childViews",END_X:"endX",END_Y:"endY",OBSTRUCTIONS:"obstructions"},MeasurementStateChangeSource:{CONTAINER:"container",CREATIVE:"creative"},ElementMarkup:{OMID_ELEMENT_CLASS_NAME:"omid-element"},CommunicationType:{NONE:"NONE",DIRECT:"DIRECT",POST_MESSAGE:"POST_MESSAGE"},OmidImplementer:{OMSDK:"omsdk"}},contents_InternalMessage_GUID_KEY="omid_message_guid",contents_InternalMessage_METHOD_KEY="omid_message_method",contents_InternalMessage_VERSION_KEY="omid_message_version",contents_InternalMessage_ARGS_KEY="omid_message_args",exports_InternalMessage=function(e,t,i,n){this.guid=e,this.method=t,this.version=i,this.args=n};exports_InternalMessage.isValidSerializedMessage=function(e){return!!e&&void 0!==e[contents_InternalMessage_GUID_KEY]&&void 0!==e[contents_InternalMessage_METHOD_KEY]&&void 0!==e[contents_InternalMessage_VERSION_KEY]&&"string"==typeof e[contents_InternalMessage_GUID_KEY]&&"string"==typeof e[contents_InternalMessage_METHOD_KEY]&&"string"==typeof e[contents_InternalMessage_VERSION_KEY]&&(void 0===e[contents_InternalMessage_ARGS_KEY]||void 0!==e[contents_InternalMessage_ARGS_KEY])},exports_InternalMessage.deserialize=function(e){return new exports_InternalMessage(e[contents_InternalMessage_GUID_KEY],e[contents_InternalMessage_METHOD_KEY],e[contents_InternalMessage_VERSION_KEY],e[contents_InternalMessage_ARGS_KEY])},exports_InternalMessage.prototype.serialize=function(){var e={};return e[contents_InternalMessage_GUID_KEY]=this.guid,e[contents_InternalMessage_METHOD_KEY]=this.method,e[contents_InternalMessage_VERSION_KEY]=this.version,e=e,void 0!==this.args&&(e[contents_InternalMessage_ARGS_KEY]=this.args),e};var exports_Communication=function(e){this.to=e,this.communicationType_=exports_constants.CommunicationType.NONE};exports_Communication.prototype.sendMessage=function(e,t){},exports_Communication.prototype.handleMessage=function(e,t){this.onMessage&&this.onMessage(e,t)},exports_Communication.prototype.generateGuid=function(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(e){var t=16*Math.random()|0;return e="y"===e?(3&t|8).toString(16):t.toString(16)})},exports_Communication.prototype.serialize=function(e){return JSON.stringify(e)},exports_Communication.prototype.deserialize=function(e){return JSON.parse(e)},exports_Communication.prototype.isDirectCommunication=function(){return this.communicationType_===exports_constants.CommunicationType.DIRECT};var exports_DetectOmid={OMID_PRESENT_FRAME_NAME:"omid_v1_present",isOmidPresent:function(e){try{return!!e.frames&&!!e.frames[exports_DetectOmid.OMID_PRESENT_FRAME_NAME]}catch(e){return!1}},declareOmidPresence:function(e){e.frames&&e.document&&(exports_DetectOmid.OMID_PRESENT_FRAME_NAME in e.frames||(null==e.document.body&&exports_DetectOmid.isMutationObserverAvailable_(e)?exports_DetectOmid.registerMutationObserver_(e):e.document.body?exports_DetectOmid.appendPresenceIframe_(e):e.document.write('<iframe style="display:none" id="'+exports_DetectOmid.OMID_PRESENT_FRAME_NAME+'" name="'+exports_DetectOmid.OMID_PRESENT_FRAME_NAME+'"></iframe>')))},appendPresenceIframe_:function(e){var t=e.document.createElement("iframe");t.id=exports_DetectOmid.OMID_PRESENT_FRAME_NAME,t.name=exports_DetectOmid.OMID_PRESENT_FRAME_NAME,t.style.display="none",e.document.body.appendChild(t)},isMutationObserverAvailable_:function(e){return"MutationObserver"in e},registerMutationObserver_:function(e){var t=new MutationObserver(function(i){i.forEach(function(i){"BODY"===i.addedNodes[0].nodeName&&(exports_DetectOmid.appendPresenceIframe_(e),t.disconnect())})});t.observe(e.document.documentElement,{childList:!0})}},exports_DirectCommunication=function(e){exports_Communication.call(this,e),this.communicationType_=exports_constants.CommunicationType.DIRECT,this.handleExportedMessage=exports_DirectCommunication.prototype.handleExportedMessage.bind(this)};$jscomp.inherits(exports_DirectCommunication,exports_Communication),exports_DirectCommunication.prototype.sendMessage=function(e,t){if(!(t=void 0===t?this.to:t))throw Error("Message destination must be defined at construction time or when sending the message.");t.handleExportedMessage(e.serialize(),this)},exports_DirectCommunication.prototype.handleExportedMessage=function(e,t){exports_InternalMessage.isValidSerializedMessage(e)&&this.handleMessage(exports_InternalMessage.deserialize(e),t)};var exports_eventTypedefs={},exports_exporter={};exports_exporter.packageExport=function(e,t,i){(i=void 0===i?contents_exporter_getOmidExports():i)&&((e=e.split(".")).slice(0,e.length-1).reduce(contents_exporter_getOrCreateName,i)[e[e.length-1]]=t)};var exports_logger={error:function(e){for(var t=[],i=0;i<arguments.length;++i)t[i-0]=arguments[i];contents_logger_executeLog(function(){throw new(Function.prototype.bind.apply(Error,[null].concat(["Could not complete the test successfully - "],$jscomp.arrayFromIterable(t))))},function(){return console.error.apply(console,[].concat($jscomp.arrayFromIterable(t)))})},debug:function(e){for(var t=[],i=0;i<arguments.length;++i)t[i-0]=arguments[i];contents_logger_executeLog(function(){},function(){return console.error.apply(console,[].concat($jscomp.arrayFromIterable(t)))})}},exports_OmidGlobalProvider={},contents_OmidGlobalProvider_globalThis=eval("this");exports_OmidGlobalProvider.omidGlobal=contents_OmidGlobalProvider_getOmidGlobal();var exports_PostMessageCommunication=function(e,t){t=void 0===t?exports_OmidGlobalProvider.omidGlobal:t,exports_Communication.call(this,t);var i=this;this.communicationType_=exports_constants.CommunicationType.POST_MESSAGE,e.addEventListener("message",function(e){if("object"==typeof e.data){var t=e.data;exports_InternalMessage.isValidSerializedMessage(t)&&(t=exports_InternalMessage.deserialize(t),e.source&&i.handleMessage(t,e.source))}})};$jscomp.inherits(exports_PostMessageCommunication,exports_Communication),exports_PostMessageCommunication.isCompatibleContext=function(e){return!!(e&&e.addEventListener&&e.postMessage)},exports_PostMessageCommunication.prototype.sendMessage=function(e,t){if(!(t=void 0===t?this.to:t))throw Error("Message destination must be defined at construction time or when sending the message.");t.postMessage(e.serialize(),"*")};var exports_Rectangle=function(e,t,i,n){this.x=e,this.y=t,this.width=i,this.height=n},exports_serviceCommunication={};exports_serviceCommunication.startServiceCommunication=function(e,t,i){return i=void 0===i?exports_DetectOmid.isOmidPresent:i,(t=contents_serviceCommunication_getUnobfuscatedKey(e,t))?new exports_DirectCommunication(t):e.top&&i(e.top)?new exports_PostMessageCommunication(e,e.top):null};var exports_VastProperties=function(e,t,i,n){this.isSkippable=e,this.skipOffset=t,this.isAutoPlay=i,this.position=n},exports_version={ApiVersion:"1.0",Version:"1.1.0-dev"},contents_VerificationClient_VERIFICATION_CLIENT_VERSION=exports_version.Version,contents_VerificationClient_EventCallback,exports_VerificationClient=function(e){(this.communication=e=void 0===e?exports_serviceCommunication.startServiceCommunication(exports_OmidGlobalProvider.omidGlobal,["omid","v1_VerificationServiceCommunication"]):e)&&(this.communication.onMessage=this.handleMessage_.bind(this)),this.remoteIntervals_=this.remoteTimeouts_=0,this.callbackMap_={}};exports_VerificationClient.prototype.isSupported=function(){return!!this.communication},exports_VerificationClient.prototype.registerSessionObserver=function(e,t){exports_argsChecker.assertFunction("functionToExecute",e),this.sendMessage_("addSessionListener",e,t)},exports_VerificationClient.prototype.addEventListener=function(e,t){exports_argsChecker.assertTruthyString("eventType",e),exports_argsChecker.assertFunction("functionToExecute",t),this.sendMessage_("addEventListener",t,e)},exports_VerificationClient.prototype.sendUrl=function(e,t,i){exports_argsChecker.assertTruthyString("url",e),this.sendMessage_("sendUrl",function(e){e&&t?t():!e&&i&&i()},e)},exports_VerificationClient.prototype.injectJavaScriptResource=function(e,t,i){var n=this;exports_argsChecker.assertTruthyString("url",e),exports_OmidGlobalProvider.omidGlobal.document?this.injectJavascriptResourceUrlInDom_(e,t,i):this.sendMessage_("injectJavaScriptResource",function(o,s){o?(n.evaluateJavaScript_(s,e),t()):(exports_logger.error("Service failed to load JavaScript resource."),i())},e)},exports_VerificationClient.prototype.injectJavascriptResourceUrlInDom_=function(e,t,i){var n=exports_OmidGlobalProvider.omidGlobal.document,o=n.body;(n=n.createElement("script")).onload=t,n.onerror=i,n.src=e,n.type="application/javascript",o.appendChild(n)},exports_VerificationClient.prototype.evaluateJavaScript_=function(a$jscomp$59,b$jscomp$41){try{eval(a$jscomp$59)}catch(e){exports_logger.error('Error evaluating the JavaScript resource from "'+b$jscomp$41+'".')}},exports_VerificationClient.prototype.setTimeout=function(e,t){if(exports_argsChecker.assertFunction("functionToExecute",e),exports_argsChecker.assertPositiveNumber("timeInMillis",t),this.hasTimeoutMethods_())return exports_OmidGlobalProvider.omidGlobal.setTimeout(e,t);var i=this.remoteTimeouts_++;return this.sendMessage_("setTimeout",e,i,t),i},exports_VerificationClient.prototype.clearTimeout=function(e){exports_argsChecker.assertPositiveNumber("timeoutId",e),this.hasTimeoutMethods_()?exports_OmidGlobalProvider.omidGlobal.clearTimeout(e):this.sendOneWayMessage_("clearTimeout",e)},exports_VerificationClient.prototype.setInterval=function(e,t){if(exports_argsChecker.assertFunction("functionToExecute",e),exports_argsChecker.assertPositiveNumber("timeInMillis",t),this.hasIntervalMethods_())return exports_OmidGlobalProvider.omidGlobal.setInterval(e,t);var i=this.remoteIntervals_++;return this.sendMessage_("setInterval",e,i,t),i},exports_VerificationClient.prototype.clearInterval=function(e){exports_argsChecker.assertPositiveNumber("intervalId",e),this.hasIntervalMethods_()?exports_OmidGlobalProvider.omidGlobal.clearInterval(e):this.sendOneWayMessage_("clearInterval",e)},exports_VerificationClient.prototype.hasTimeoutMethods_=function(){return"function"==typeof exports_OmidGlobalProvider.omidGlobal.setTimeout&&"function"==typeof exports_OmidGlobalProvider.omidGlobal.clearTimeout},exports_VerificationClient.prototype.hasIntervalMethods_=function(){return"function"==typeof exports_OmidGlobalProvider.omidGlobal.setInterval&&"function"==typeof exports_OmidGlobalProvider.omidGlobal.clearInterval},exports_VerificationClient.prototype.handleMessage_=function(e,t){t=e.method;var i=e.guid;if(e=e.args,"response"===t&&this.callbackMap_[i]){var n=exports_ArgsSerDe.deserializeMessageArgs(contents_VerificationClient_VERIFICATION_CLIENT_VERSION,e);this.callbackMap_[i].apply(this,n)}"error"===t&&currWindow.console&&exports_logger.error(e)},exports_VerificationClient.prototype.sendOneWayMessage_=function(e,t){for(var i=[],n=1;n<arguments.length;++n)i[n-1]=arguments[n];this.sendMessage_.apply(this,[].concat([e,null],$jscomp.arrayFromIterable(i)))},exports_VerificationClient.prototype.sendMessage_=function(e,t,i){for(var n=[],o=2;o<arguments.length;++o)n[o-2]=arguments[o];this.isSupported()&&(o=this.communication.generateGuid(),t&&(this.callbackMap_[o]=t),n=new exports_InternalMessage(o,"VerificationService."+e,contents_VerificationClient_VERIFICATION_CLIENT_VERSION,exports_ArgsSerDe.serializeMessageArgs(contents_VerificationClient_VERIFICATION_CLIENT_VERSION,n)),this.communication.sendMessage(n))},exports_exporter.packageExport("OmidVerificationClient",exports_VerificationClient)},builder=function(e,t,i){if("object"==typeof i&&"string"!=typeof i.nodeName)t(e,i);else{var n=function(e){var t;for(t in e)e.hasOwnProperty(t)&&(e[t]=n(e[t]));return Object.freeze(e)};t(e,i={});var o;for(o in i)i.hasOwnProperty(o)&&(Object.getOwnPropertyDescriptor(e,o)||Object.defineProperty(e,o,{get:function(){return n({"1.0.2-dev":i[o]})}}))}};builder(ctx,action,input);var typeProperty=Object.keys(currWindow.OmidVerificationClient)[0],self=new currWindow.OmidVerificationClient[typeProperty];if(!self.isSupported())return currWindow.isOmidSupported=!1,currWindow.verificationScriptLoaded=!0,void window.primisLog("[[OMID]] is not Supported");window.primisLog("[[OMID]] is Supported"),this.config.isAppsGeometry=!0,this.config.appsGeometryStatus={viewable:!1,init:!0,inActiveView:!1},currWindow.isOmidSupported=!0,self.registerSessionObserver(fireEvent,"primis.tech-omid"),self.addEventListener("geometryChange",fireEvent),currWindow.verificationScriptLoaded=!0}function AppSdkApi(e){var t=this;this.config=e;var i=0,n=[];this.hasFlowParent=!0,window.primisLog("[[AppSDKApi]] start"),window.top.PrimisAppApi?(window.primisLog("[[AppSDKApi]] sdk init"),this.config.isAppSdk=!0,this.appApi=window.top.primisAppApi,this.sendToApp=function(e){e.index=i++,window.primisLog("[[AppSDKApi]] sendToApp: "+e.id);try{this.appApi.sendToApp(e)}catch(e){window.primisLog("[[AppSDKApi]] sendToApp error: "+e.toString())}},this.callbackToApp=function(e){this.appApi.callbackToApp(e)},this.receiveFromApp=function(e){switch(window.primisLog("[[AppSDKApi]] receiveFromApp: "+e.id+":"+e.value),n.push(e),e.type){case"report":t.onReportFromApp(e);break;case"request":t.onRequestFromApp(e);break;case"command":t.onCommandFromApp(e)}},this.appApi.receiveFromApp=this.receiveFromApp,this.callbackFromApp=function(e){window.primisLog("[[AppSDKApi]] callbackFromApp"+e.id)},this.appApi.callbackFromApp=this.callbackFromApp,this.config.isAppsGeometry=!0,this.config.appsGeometryStatus={viewable:!1,init:!0,inActiveView:!1},this.config.responsive=!0,window.top.primisLog=window.primisLog,this.config.bus.addCallBack("playerConstructed",function(){var e=new AppApiObj;e.id="webApiReady",e.type="report",t.sendToApp(e)}),this.config.bus.addCallBack("onPlayerResize",function(e){if(t.config.flowStatus){var i=[];(l=new AppApiObj).id="flowWidth",l.value=t.config.flowWidth,i.push(l);(l=new AppApiObj).id="flowHeight",l.value=t.config.playerHeight,i.push(l);(l=new AppApiObj).id="hOffset",l.value=t.config.sliderSideOffset,i.push(l);(l=new AppApiObj).id="vOffset",l.value=t.config.sliderOffset,i.push(l);var n=t.config.sliderDir.split(""),o="r"==n[1]?"right":"l"==n[1]?"left":"s"==n[1]?"streach":"middle",s="b"==n[0]?"bottom":"top";(l=new AppApiObj).id="hSticky",l.value=o,i.push(l);(l=new AppApiObj).id="vSticky",l.value=s,i.push(l);(l=new AppApiObj).id="hasShadow",l.value=t.config.allowFloatingShadow;(l=new AppApiObj).id="zIndex",l.value=t.config.flowZindex,i.push(l);var a="both"===t.config.flowMode||"above"===t.config.flowMode,r="both"===t.config.flowMode||"below"===t.config.flowMode;(l=new AppApiObj).id="isFlowUp",l.value=a,i.push(l);(l=new AppApiObj).id="isFlowDown",l.value=r,i.push(l);var l;(l=new AppApiObj).id="goFlow",l.type="command",l.data=i,setTimeout(function(){t.sendToApp(l)},1)}}),this.config.bus.addCallBack("onUserEvent",function(e){"onCloseBtnClick"==e.type&&(t.setUnFlowOnApp(),t.disableFlowMode=!0)})):window.primisLog("[[AppSDKApi]] sdk not found")}function AppApiObj(){this.id="",this.type="",this.data=[],this.value=null,this.callback=void 0}function SekindoSPlayer(e,t){var i=this;this.config=e,"flow"==this.config.playerMode&&this.config.flowSkinWrap.length>10&&!this.config.isAmpProject&&!window.top.sekindoFlowingPlayerOn&&(window.parent.config=this.config),this.config.sPlayer=this,this.uniqueID=t,this.config.uniqueID=t,this.adsManager=null,this.debugAgent=new SekindoDebugAgent(this.config),SekindoUtils.applyExternalRules(this.config,"config","init"),window.Sekindo&&window.Sekindo.LogRest&&(this.config.LogRest=window.Sekindo.LogRest),this.config.isMuted=0===parseInt(this.config.isAutoSound),this.config.isMuteControlled=!0,this.config.soundEnabledByUser=!this.config.isMuted,this.config.isDesktop="desktop"===this.config.clientInfo.deviceType,this.config.adIsPlaying=!1,this.config.isPlaying="0"!=this.config.isAutoPlay,this.config.flowWidth=this.config.flowWidth||310,this.config.flowHeight=this.config.flowHeight||260,this.config.pixelDivTimeout=6e4,this.config.dummyBaseHref="https://amli.sekindo.com/",this.config.ampView=window.ampView=-1,this.config.flowSkinWrap=!("flow"!=this.config.playerMode&&"sticky"!=this.config.playerMode||!this.config.flowSkinWrap||!this.config.flowSkinWrap.length)&&this.config.flowSkinWrap,this.config.prebidAdUnitCodes=[],window.isAmpProject=this.config.isAmpProject,this.config.responsive=this.config.responsive&&"sticky"!=this.config.playerMode&&"slider"!=this.config.playerMode&&"inRead"!=this.config.playerMode&&"inUnit"!=this.config.playerMode,this.config.nextContentIndex=0,this.config.currContentIndex=0,this.config.isIvtHiddenPixelFired=!1,this.config.isFirstViewablePreroll=!0,this.config.playerTemplateData.isLightBox=!(!this.config.playerTemplateData.isLightBox||"desktop"!=this.config.clientInfo.deviceType),this.config.flowZindex=this.config.playerTemplateData.isLightBox?2147483646:0,("inRead"==this.config.playerMode||"inUnit"==this.config.playerMode||"slider"==this.config.playerMode||this.config.verticalOrientation)&&(this.config.playerTemplateData.hasPlaylist=!1),window["sekindoBus"+this.uniqueID]=new SekindoBus,this.config.bus=window["sekindoBus"+this.uniqueID],this.config.enableFlowDrag=new SekindoServices.controlDragElements(this.config).enableFlowDrag,this.config.isAppsGeometry=!1,this.config.isApp&&("ios"==this.config.clientInfo.os&&SekindoUtils.overrideSetInterval(),this.appSdkApi=new AppSdkApi(this.config),this.config.isAppSdk||(window.primisLog("[[OMID]] init OMID"),this.omid=new SekindoOmid(this.config)),this.config.isAppSdk||this.config.isAppsGeometry||(window.primisLog("[[MRAID]] init MRAID"),this.mraid=new SekindoMraid(this.config))),this.config.primisConsoleLog=function(e){-1!=i.config.pubUrl.indexOf("primisDbj")&&console.log("PRIMIS:"+e)},this.constructIframes()}SekindoVideoManager.prototype.generateVideoElement=function(){var e=this,t=this.config.videoIFrameDoc.createElement("video");"iosWrapper"==this.config.vidType&&(this.iosVidWrapper=new SekindoServices.iosVidAutoplayWrapper(t));try{t.playsInline=!0}catch(e){}return t.muted=!0,"Facebook"!=this.config.clientInfo.extra.browser&&"app"!=this.config.clientInfo.browser&&"papp"!=this.config.clientInfo.browser||(t.poster="none",t.controls=!1),this.config.isDesktop&&"safari"!=this.config.clientInfo.browser||(this.singleQualityPlayer=!0),this.reportCaptionsStatus=function(){if(t.textTracks[0]&&("disabled"==t.textTracks[0].mode&&(e.hasCptions=!0),e.hasCptions)){var i=e.config.isCaptionsOn?"showing":"hidden";i!=t.textTracks[0].mode?t.textTracks[0].mode=i:e.config.bus.triggerNote("onTextTracksChange","showing"==t.textTracks[0].mode?1:0)}},t.textTracks.addEventListener("change",function(){e.reportCaptionsStatus()}),("ios"===this.config.clientInfo.os||"macosx"===this.config.clientInfo.os&&"safari"===this.config.clientInfo.browser)&&t.textTracks.addEventListener("addtrack",function(){e.reportCaptionsStatus()}),this.updateCaptionsStatus=function(e){var i=e?"showing":"hidden";t.textTracks&&t.textTracks[0]&&t.textTracks[0].mode!=i&&(t.textTracks[0].mode=e?"showing":"hidden")},this.config.bus.addCallBack("requestUpdateCaptionsMode",function(t){e.updateCaptionsStatus(t)}),t},SekindoVideoManager.prototype.wrapVideoElement=function(){var e=this;this.videoElement.style.cssText=this.vidWrapper.style.cssText,this.vidWrapper.addEventListener=function(t,i){e.listenersArray.push({type:t,callback:i}),e.videoElement.addEventListener(t,i)},this.vidWrapper.removeEventListener=function(t,i){e.videoElement.removeEventListener(t,i)},this.vidWrapper.play=function(){var t=e.videoElement.play();if(window.primisLog("[[Video Manager]] play:"+t),t)try{t.then(function(e){window.primisLog("[[Video Manager]] then playing ok")}).catch(function(t){window.primisLog("[[Video Manager]] error:"+t.message),e.videoElement.muted?e.iosVidWrapper||"ios"!==e.config.clientInfo.os||"The operation was aborted."==t.message||(e.config.vidType="iosWrapper",e.iosVidWrapper=new SekindoServices.iosVidAutoplayWrapper(e.videoElement),e.vidWrapper.play()):(e.videoElement.muted=!0,e.vidWrapper.play())})}catch(e){}},this.vidWrapper.pause=function(){e.videoElement.pause()}},SekindoVideoManager.prototype.setVideoSrc=function(e,t){var i=this;if(this.config.isStreamingVideo=!(t.hlsUrl!=t.url),this.quality&&!this.config.isStreamingVideo||"hlsJs"!=this.config.hls&&"native"!=this.config.hls||!t.hlsUrl||!t.hlsUrl.length){window.primisLog("[[Hls]] - Video type set to MP4. Reason: High Quality or no HLS url...");var n=t.url;this.quality&&-1!=n.indexOf("://"+this.config.videoDomain+"/uploads/")&&-1!=n.indexOf("/users/converted/")&&(n=n.replace("converted","origin")),e.src=n}else if("hlsJs"==this.config.hls)this.generateHlsSrcWrapper(e,t.hlsUrl,t.url);else{e.removeAttribute("src");for(var o=e.getElementsByTagName("source");o.length>0;)e.removeChild(o[0]);var s=document.createElement("source");s.src=t.hlsUrl,s.type="application/x-mpegURL",e.appendChild(s),(s=document.createElement("source")).src=t.url,s.type="video/mp4",e.appendChild(s),e.load(),window.primisLog("[[Hls]] - Video type set to HLS or MP4(Unknown...). Reason: Via native HLS/iOS")}if(this.hasCptions=!1,this.config.bus.triggerNote("onTextTracksChange",-1),"edge"==this.config.clientInfo.browser){clearInterval(a);var a=setInterval(function(){e.textTracks.length&&"disabled"==e.textTracks[0].mode&&(e.textTracks[0].mode=i.config.isCaptionsOn?"showing":"hidden",i.hasCptions=!0,clearInterval(a))},1e3);clearTimeout(r);var r=setTimeout(function(){clearInterval(a)},5e3)}},SekindoVideoManager.prototype.deleteHlsJs=function(){this.hlsJs.detachMedia(),this.hlsJs.destroy(),this.hlsJs.bufferTimer&&(clearInterval(this.hlsJs.bufferTimer),this.hlsJs.bufferTimer=void 0),delete this.hlsJs,this.hlsJs=null},SekindoVideoManager.prototype.removeNewVideoElement=function(){this.hlsJs&&this.hlsJs.media==this.newVideoElement&&this.deleteHlsJs(),this.newVideoElement.removeEventListener("timeupdate",this.syncPlayersTimeFunc),this.newVideoElement.pause(),this.newVideoElement.src="",this.newVideoElement.load(),this.vidWrapper.removeChild(this.newVideoElement),delete this.newVideoElement,this.newVideoElement=null},SekindoVideoManager.prototype.swapVideoElement=function(e){if(!this.singleQualityPlayer&&!this.config.isStreamingVideo&&this.quality!=e&&(this.quality=e,this.newVideoElement&&this.removeNewVideoElement(),this.runningQuality!=e&&this.vidSrc)){if(this.newVideoElement=this.generateVideoElement(),this.vidWrapper.appendChild(this.newVideoElement),this.quality){if(this.vidSrc.url.replace("converted","origin")==this.videoElement.src)return}this.vidWrapper.appendChild(this.newVideoElement),this.setVideoSrc(this.newVideoElement,this.vidSrc);var t=this.newVideoElement.play();if(t)try{t.then(function(){}).catch(function(e){})}catch(e){}this.newVideoElement.muted=!0;try{this.newVideoElement.currentTime=this.videoElement.currentTime+1}catch(e){}this.newVideoElement.addEventListener("timeupdate",this.syncPlayersTimeFunc)}},SekindoVideoManager.prototype.syncPlayersTime=function(){var e=this;if(this.newVideoElement){var t=this.videoElement.currentTime-this.newVideoElement.currentTime;if(Math.abs(t)>.5)try{this.newVideoElement.currentTime=this.videoElement.currentTime+t/2}catch(e){}else{this.newVideoElement.removeEventListener("timeupdate",this.syncPlayersTimeFunc);for(var i=0;i<this.listenersArray.length;i++){var n=this.listenersArray[i];this.videoElement.removeEventListener(n.type,n.callback)}this.videoElement.paused&&this.newVideoElement.pause(),this.newVideoElement.style.cssText=this.videoElement.style.cssText,this.newVideoElement.style.width="100%",this.newVideoElement.style.height="100%",this.newVideoElement.volume=this.videoElement.volume,this.newVideoElement.muted=this.videoElement.muted,setTimeout(function(){for(var t=0;t<e.listenersArray.length;t++){var i=e.listenersArray[t];e.videoElement.addEventListener(i.type,i.callback)}},1),this.videoElement.pause(),this.hlsJs&&this.hlsJs.media==this.videoElement&&this.deleteHlsJs(),this.vidWrapper.removeChild(this.videoElement),this.videoElement=this.newVideoElement,this.newVideoElement=null,this.wrapVideoElement(),this.runningQuality=this.quality}}},SekindoVideoManager.prototype.generateHlsSrcWrapper=function(e,t,i){var n=this;this.hlsJs&&this.deleteHlsJs();return this.hlsJs=new Hls({maxMaxBufferLength:30}),this.hlsJs.on(Hls.Events.ERROR,function(t,o){if(o.fatal)switch(o.type){case Hls.ErrorTypes.NETWORK_ERROR:n.hlsJs.startLoad();break;case Hls.ErrorTypes.MEDIA_ERROR:n.hlsJs.recoverMediaError()}switch(o.details){case Hls.ErrorDetails.MANIFEST_LOAD_ERROR:case Hls.ErrorDetails.MANIFEST_LOAD_TIMEOUT:n.deleteHlsJs(),e.src=i,e.play(),window.primisLog("[[Hls]] - Video type set to MP4. Reason: Fallback");o.response&&o.response.code+": "+o.response.text,SekindoUtils.firePixel(location.protocol+"//live.sekindo.com/live/liveView.php?hlsFb=1&vp_content="+encodeURIComponent(i),n.config.pixelDiv,n.config)}}),this.hlsJs.attachMedia(e),this.hlsJs.loadSource(t),window.primisLog("[[Hls]] - Video type set to HLS. Reason: Via HLS.js"),this.hlsJs},SekindoVideoManager.prototype.defineVidWrapperProperties=function(){var e=this;Object.defineProperty(this.vidWrapper,"width",{get:function(){return e.videoElement.width},set:function(t){e.videoElement.width=t}}),Object.defineProperty(this.vidWrapper,"height",{get:function(){return e.videoElement.height},set:function(t){e.videoElement.height=t}}),Object.defineProperty(this.vidWrapper,"src",{get:function(){return e.vidSrc},set:function(t){e.newVideoElement&&e.removeNewVideoElement(),e.vidSrc=t,e.setVideoSrc(e.videoElement,t)}}),Object.defineProperty(this.vidWrapper,"networkState",{get:function(){return e.videoElement.networkState}}),Object.defineProperty(this.vidWrapper,"paused",{get:function(){return e.videoElement.paused}}),Object.defineProperty(this.vidWrapper,"muted",{get:function(){return e.videoElement.muted},set:function(t){e.videoElement.muted=t}}),Object.defineProperty(this.vidWrapper,"volume",{get:function(){return e.videoElement.volume},set:function(t){e.videoElement.volume=t}}),Object.defineProperty(this.vidWrapper,"currentTime",{get:function(){return e.videoElement.currentTime},set:function(t){e.videoElement.currentTime=t}}),Object.defineProperty(this.vidWrapper,"duration",{get:function(){return e.videoElement.duration}}),Object.defineProperty(this.vidWrapper,"buffered",{get:function(){return e.videoElement.buffered}}),Object.defineProperty(this.vidWrapper,"currentSrc",{get:function(){return e.videoElement.currentSrc}})},LayoutManager.prototype.buildElements=function(){var e=(this.config.flowCloseBtnIframe.contentWindow||this.config.flowCloseBtnIframe.contentDocument.defaultView).document||flowCloseBtnIframe.contentDocument;this.flowCloseBtnDiv=e.createElement("div"),e.body.appendChild(this.flowCloseBtnDiv),e.getElementsByTagName("body")[0].style.margin=0,this.videoDiv=this.createChild("div",this.config.videoIFrameDoc.body,null,null,"videoDiv"),this.videoDiv.style.width="100%",this.videoDiv.style.height="100%",this.videoDiv.style.background="black",this.videoDiv.id="videoContainerDiv",this.videoDiv.style.position="relative",this.videoDiv.style.zIndex=1,this.adDiv=this.createChild("div",this.config.videoIFrameDoc.body,null,null,"adDiv"),this.adDiv.style.width="auto",this.adDiv.style.height="auto",this.adDiv.style.position="absolute",this.adDiv.style.marginLeft="auto",
this.adDiv.style.marginRight="auto",this.adDiv.style.marginTop="auto",this.adDiv.style.marginBottom="auto",this.adDiv.style.display="block",this.adDiv.style.zIndex=2,this.adDiv.style.top="0px",this.adDiv.style.left="0px",this.adDiv.style.cursor="pointer",this.adDiv.style.background="black",this.adDiv.id="adContainerDiv",this.layoutDiv=this.createChild("div",this.config.videoIFrameDoc.body,null,null,"layoutDiv"),this.layoutDiv.style.width="100%",this.layoutDiv.style.height="100%",this.layoutDiv.style.position="absolute",this.layoutDiv.style.display="inline-block",this.layoutDiv.style.zIndex=3,this.layoutDiv.style.top="0px",this.layoutDiv.style.left="0px",this.layoutDiv.style.pointerEvents="none",this.layoutDiv.id="layoutContainerDiv",this.adBreakDiv=this.createChild("div",this.config.videoIFrameDoc.body,null,null,"adBreakDiv"),this.adBreakDiv.style.width="100%",this.adBreakDiv.style.height="100%",this.adBreakDiv.style.position="absolute",this.adBreakDiv.style.display="none",this.adBreakDiv.style.zIndex=4,this.adBreakDiv.style.top="0px",this.adBreakDiv.style.left="0px",this.adBreakDiv.style.cursor="pointer",this.adBreakDiv.style.background="black";this.adBreakPreloader=this.createChild("div",this.adBreakDiv,null,null,"adBreakPreloader"),this.adBreakPreloader.style.width="58px",this.adBreakPreloader.style.height="58px",this.adBreakPreloader.style.top="50%",this.adBreakPreloader.style.left="50%",this.adBreakPreloader.style.fill="none",this.adBreakPreloader.style.stroke="white",this.adBreakPreloader.style.strokeWidth="4",this.adBreakPreloader.style.strokeDasharray="400",this.adBreakPreloader.style.strokeDashoffset="0",this.adBreakPreloader.style.position="absolute",this.adBreakPreloader.style.strokeDashoffset="0",this.adBreakPreloader.style.display="block",this.adBreakPreloader.innerHTML='<svg viewBox="0 0 140 140" preserveAspectRatio="xMinYMin meet"> <g> <circle r="45%" cx="50%" cy="50%" class="circle-back" /> </g></svg> '},LayoutManager.prototype.playerInterface=function(){var e=this;this.config.bus.addCallBack("addChild",function(t){e.addChilds(t)}),this.config.bus.addCallBack("removeChild",function(t){e.removeChilds(t)}),this.config.bus.addCallBack("onFSOrientationChange",function(){e.onFullscreenResize()}),this.config.bus.addCallBack("changeTitle",function(t){e.setHeaderTitle(t)}),this.config.bus.addCallBack("onVpaidEvent",function(t){e.onVideoEvent(t)}),this.config.bus.addCallBack("onVideoEvent",function(t){e.onVideoEvent(t)}),this.config.bus.addCallBack("contentStarted",function(t){e.onVideoEvent({type:"contentStarted",val:{index:t,player:"playlistManager"}})}),this.config.bus.addCallBack("contentEnded",function(t){e.onVideoEvent({type:"contentEnded",val:t})}),this.config.bus.addCallBack("onVideoProgress",function(t){e.onVideoEvent({type:"onVideoProgress",val:t})}),this.config.bus.addCallBack("onSwitchContent",function(){e.onVideoEvent({type:"onSwitchContent",val:!0})}),this.config.bus.addCallBack("adCompleted",function(){e.onAdEvent(!1)}),this.config.bus.addCallBack("adStarted",function(t){e.onAdEvent(!0,t)}),this.config.bus.addCallBack("openContent",function(t){e.openContent(t.value,t.fileId)}),this.config.bus.addCallBack("intentOff",function(){e.intent("intentOff")}),this.config.bus.addCallBack("intentOn",function(){e.intent("intentOn")}),this.config.bus.addCallBack("playlistDataUpdated",function(t){e.layoutAPI({type:"playlistData",content:t})}),this.config.bus.addCallBack("hideTimeBar",function(t){e.layoutAPI({type:"hideTimeBar"})}),this.config.bus.addCallBack("setPreloader",function(t){e.setAdBreak(t)}),this.config.bus.addCallBack("bgCoverBtnsDisplay",function(t){e.layoutAPI({type:"bgCoverBtnsDisplay",content:t})}),this.config.bus.addCallBack("requestLayoutResize",function(t){e.playerResize(t||{})}),this.config.bus.addCallBack("onTextTracksChange",function(t){e.onTextTracksChanged(t)})},LayoutManager.prototype.setAdBreak=function(e){var t=this;if(e){if(this.adBreakDiv.style.display="block",!this.adBreakPreloaderInterval){var i=0;this.adBreakPreloaderInterval=setInterval(function(){i+=-1.5,t.adBreakPreloader.style.strokeDashoffset=i,t.adBreakPreloader.style.transform="translate(-50%, -50%) rotate("+-2*i+"deg)"},10)}}else this.adBreakDiv.style.display="none",this.adBreakPreloaderInterval&&(clearInterval(this.adBreakPreloaderInterval),this.adBreakPreloaderInterval=null)},LayoutManager.prototype.layoutInterface=function(){var e=this;this.layoutNote=function(t){return e.onLayoutNote(t)},this.layout=this.createChild("div",this.layoutDiv,null,null,"layout"),this.layoutDesign=new LayoutDesign(this.layoutExtraData,this.layout,this.layoutNote),this.autoSkipContent=new AutoSkipContent(this),this.layoutAPI=this.layoutDesign.api},LayoutManager.prototype.onLayoutNote=function(e){var t=this;switch(e.type){case"adIsPlaying":return this.config.adIsPlaying;case"clickUrl":return this.config.clkUrl;case"contentClickUrl":return this.config.contentClickUrl;case"shareUrl":var i="";if(this.config.clkUrl){if(i=this.config.clkUrl,this.config.contentPlayList[this.config.currContentIndex].shareUrl)this.config.contentPlayList[this.config.currContentIndex].shareUrl.replace(/[?&#]+([^=&]+)=([^&]*)/gi,function(e,n,o){n.toLowerCase()==t.config.sharedVideoParameterName&&(i+=-1!=i.indexOf("?")?"&":"?",i+=t.config.sharedVideoParameterName+"="+o)})}else this.config.contentPlayList[this.config.currContentIndex].shareUrl&&(i=this.config.contentPlayList[this.config.currContentIndex].shareUrl);return i;case"viewability":return this.config.onViewabilityChange.getCurrState();case"minLikesNum":return this.config.minLikesNum;case"getObj":return-1!=e.value.indexOf("config")?this.config[e.value.replace("config.","")]:this[e.value];case"onVideoLike":this.config.bus.triggerNote("onUserEvent",{type:"onVideoLike"}),this.intent("onVideoLike");break;case"onTimeScrabber":this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentScrubberPixel"}),this.config.bus.triggerNote("onUserEvent",{type:"timeScrabber",value:e.value}),this.intent("onTimeScrabber");break;case"onSkipProgress":this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentScrubberPixel"}),this.config.bus.triggerNote("onUserEvent",{type:"skipProgress",value:e.value}),this.intent("onSkipProgress");break;case"onVolumeScrabber":this.config.soundEnabledByUser=!0,this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentVolChangePixel"}),this.config.bus.triggerNote("onUserEvent",{type:"onVolumeScrabber",value:e.value}),this.intent("onVolumeScrabber");break;case"onMute":this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentVolChangePixel"}),this.config.bus.triggerNote("onUserEvent",{type:"onMute",value:e.value}),this.intent("onMute",e.value);break;case"onCloseBtnClick":this.config.bus.triggerNote("onUserEvent",{type:"onCloseBtnClick"}),this.config.bus.triggerNote("onUserEvent",{type:"onMute",value:1}),this.intent("onMute",1);break;case"onPause":this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentPausePixel"}),this.config.bus.triggerNote("onUserEvent",{type:"onPause"}),this.intent("onPause");break;case"onPlay":this.config.isPlaying=!0,this.config.intentInitiator="play",this.config.bus.triggerNote("onUserEvent",{type:"onPlay"}),this.intent("onPlay"),this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentPausePixel"});break;case"onNext":this.config.isPlaying=!0,this.config.nextContentIndex=(this.config.currContentIndex+1)%this.config.contentPlayList.length||0,this.intent("onNext"),this.config.bus.triggerNote("onUserEvent",{type:"onPlay"}),this.config.bus.triggerNote("userSwitchContent");break;case"onAutoNext":this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentCompletePixel"}),this.config.isPlaying=!0,this.config.nextContentIndex=(this.config.currContentIndex+1)%this.config.contentPlayList.length||0,this.intent("onAutoNext"),this.config.bus.triggerNote("onUserEvent",{type:"onPlay"}),this.config.bus.triggerNote("userSwitchContent",!0);break;case"onBack":this.config.isPlaying=!0,this.config.nextContentIndex=(this.config.currContentIndex+this.config.contentPlayList.length-1)%this.config.contentPlayList.length,this.intent("onBack"),this.config.bus.triggerNote("onUserEvent",{type:"onPlay"}),this.config.bus.triggerNote("userSwitchContent");break;case"onSwitch":this.config.isPlaying=!0,this.intent("onSwitch"),this.config.nextContentIndex=e.value,this.config.bus.triggerNote("onUserEvent",{type:"onPlay"}),this.config.bus.triggerNote("userSwitchContent");break;case"onTitleClick":this.openContent(),this.intent("onTitleClick");break;case"onFullScreen":case"onNormalScreen":case"onLightboxClose":this.requestToggleFullscreen();break;case"onCaption":this.config.isCaptionsOn=e.value,this.config.bus.triggerNote("requestUpdateCaptionsMode",e.value),this.intent("onCaption");break;case"onTransparentCover":this.config.isDesktop?"click"==e.value.type&&this.onVoidClick():"papp"==this.config.clientInfo.browser&&"touchstart"==e.value.type?(e.value.preventDefault(),this.onMobileTouch(e.value)):"touchmove"==e.value.type?this.isScrolledInPlayer=!0:"touchend"==e.value.type&&this.onMobileTouch(e.value);break;case"onAdCover":this.config.isDesktop||("papp"==this.config.clientInfo.browser&&"touchstart"==e.value.type?(e.value.preventDefault(),this.onMobileTouch(e.value)):"touchmove"==e.value.type?this.isScrolledInPlayer=!0:"touchend"==e.value.type&&this.onMobileTouch(e.value));break;case"onRemoveAdBreak":this.setAdBreak(!1);break;case"onLayoutExposed":break;case"onSkipAd":this.config.bus.triggerNote("onUserEvent",{type:"skipAd"});break;case"doRemoveChild":this.removeChilds({destiny:e.value.destiny,visual:e.value.visual});break;case"doFlowDrag":"flow"!==this.config.playerMode&&"sticky"!==this.config.playerMode||"desktop"===this.config.clientInfo.deviceType||this.config.enableFlowDrag(e.value);break;case"onPrimis":var n="papp"==this.config.clientInfo.browser?"_top":"_blank";window.open("https://www.primis.tech?utm_source="+this.config.domain+"&utm_medium="+(this.config.nativeSkinType||"classic")+"&utm_campaign=logo",n),this.intent("onPrimis");break;case"onShareClick":this.intent("onShareClick");break;case"onAutoSkipStay":this.intent("onAutoSkipStay"),this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentPausePixel"})}},LayoutManager.prototype.onVideoEvent=function(e){if(e.val&&("volumechange"==e.type||"onSwitchContent"==e.type||!(this.config.adIsPlaying&&"adsManager"!=e.val.player||!this.config.adIsPlaying&&"playlistManager"!=e.val.player)))switch(e.type){case"volumechange":this.layoutAPI({type:"volumeChange",content:e.val});break;case"play":this.swapBGimage(-1),this.layoutAPI({type:"play"});break;case"playing":this.isPlaying=!0,this.layoutAPI({type:"playing",content:e.val});break;case"pause":this.isPlaying=!1,this.layoutAPI({type:"pause"});break;case"onVideoProgress":this.autoSkipContent.checkTimeToDisplay(e.val.currTime),this.layoutAPI({type:"videoProgress",content:e.val});break;case"contentStarted":this.layoutAPI({type:"contentSwitched",content:this.config.currContentIndex});break;case"contentEnded":this.isPlaying=!1,this.intent("contentEnded"),this.layoutAPI({type:"contentEnded"});break;case"onSwitchContent":this.layoutAPI({type:"contentSwitched",content:this.config.currContentIndex})}},LayoutManager.prototype.onAdEvent=function(e,t){e?(this.adDiv.style.width="100%",this.adDiv.style.height="100%"):(this.removeChilds({destiny:"videoAd"}),this.adDiv.style.width="auto",this.adDiv.style.height="auto"),this.autoSkipContent.onAdEvent(e),this.layoutAPI({type:"adEvent",content:{adStarted:e,params:t,initBgCoverBtns:4==this.config.isAutoPlay}})},LayoutManager.prototype.intent=function(e,t){function i(e){!0===e&&!1===n.intentStatus?(setTimeout(function(){n.config.bus.triggerNote("onUserEvent",{type:"onMute",value:!1})},10),n.intentStatus=!0):!1===e&&!0===n.intentStatus&&(n.config.bus.triggerNote("onUserEvent",{type:"onMute",value:!0}),n.intentStatus=!1)}var n=this;switch(e){case"intentOff":i(!1);break;case"intentOn":i(!0);break;case"onVolumeScrabber":this.isPlaying&&(this.config.intentInitiator="volumeScrabber",this.autoSkipContent.hideAutoSkipContent(),i(!0));break;case"onMute":this.autoSkipContent.hideAutoSkipContent(),t?(this.config.soundEnabledByUser=!1,this.isPlaying&&i(!1)):(this.config.soundEnabledByUser=!0,this.isPlaying&&(this.config.intentInitiator="unmute",i(!0)));break;case"onCloseBtnClick":case"onSkipAd":break;case"onSwitchContent":"userSwitchContentFS"===this.config.intentInitiator&&(this.reportFs=-1,this.requestToggleFullscreen({fullscreenOnly:!0}));break;case"contentEnded":!1===this.config.onViewabilityChange.getCurrState()&&this.config.soundEnabledByUser&&(this.config.soundEnabledByUser=!1,this.config.bus.triggerNote("onUserEvent",{type:"onMute",value:!0}),i(!1)),this.autoSkipContent.hideAutoSkipContent(!0);break;case"fullscreenChange":SekindoServices.fullscreen.isFullscreen?(this.config.intentInitiator="fullscreen",i(!0)):this.config.soundEnabledByUser||i(!1),this.autoSkipContent.hideAutoSkipContent();break;case"onPlay":this.config.intentInitiator="play",i(!0);break;case"onAutoNext":this.autoSkipContent.hideAutoSkipContent(!0);break;case"onNext":case"onBack":this.autoSkipContent.hideAutoSkipContent(!0),this.config.intentInitiator="userSwitchContent",i(!0);break;case"onSwitch":this.config.intentInitiator="userSwitchContentFS",i(!0);break;case"onTitleClick":case"onVideoLike":case"onCaption":case"onPrimis":case"onShareClick":case"onTimeScrabber":case"onPause":case"onSkipProgress":case"onAutoSkipStay":this.autoSkipContent.hideAutoSkipContent()}},LayoutManager.prototype.calcPlayerSizes=function(e){var t=e&&e.responsive&&!this.config.flowStatus,i=e&&e.width?e.width:this.config.flowStatus?this.config.flowWidth:this.config.width,n=e&&e.height?e.height:this.config.flowStatus?this.config.flowHeight:this.config.height;this.config.responsive&&e&&"onFullScreenOff"==e.reason&&!this.config.flowStatus&&(n=1/0),t&&(n=15*i/4);var o=!!(this.config.playerTemplateData.isLightBox&&SekindoServices.fullscreen.isFullscreen&&!this.config.verticalOrientation&&this.config.allowFSPlaylist||this.config.playerTemplateData.hasPlaylist&&(!this.config.flowStatus&&"preloadFlowWfs"!=e.source||this.config.flowPlaylist)&&!SekindoServices.fullscreen.isFullscreen),s={};s.responsive=t,s.WIDTH=i,s.HEIGHT=n,s.allowPlayList=o,s.verticalOrientation=this.config.verticalOrientation,s.minOptimalHeight=this.config.minOptimalHeight,s.isFullscreen=SekindoServices.fullscreen.isFullscreen;var a=this.layoutAPI({type:"calcPlayerSizes",content:s});return a.adVideoHeight=Math.ceil(this.config.verticalOrientation?9*a.videoWidth/16:a.videoHeight),a},LayoutManager.prototype.playerResize=function(e){var t=this;this.blockOnResize=!0,setTimeout(function(){t.blockOnResize=!1},20);var i=!(!e||"onFullScreenOn"!=e.reason&&!e.centeredVideo),n=!(!this.config.flowStatus||SekindoServices.fullscreen.isFullscreen),o=this.calcPlayerSizes(e);e.playerSizes=o,e.flowing=n,this.layoutAPI({type:"layoutResize",content:e}),this.config.playerWidth=o.playerWidth,this.config.playerHeight=o.playerHeight,this.config.videoWidth=o.videoWidth,this.config.videoHeight=o.videoHeight,this.config.playlistUnitWidth=o.playlistUnitWidth,this.config.playlistHeight=o.playlistHeight,this.config.adVideoHeight=o.adVideoHeight,this.config.videoIFrame.style.width=this.config.videoWidth+"px",this.config.videoIFrame.style.height=this.config.videoHeight+"px",i?(this.config.mainPlayerDiv.style.top="50%",this.config.mainPlayerDiv.style.left="50%",this.config.mainPlayerDiv.style.position="absolute",this.config.mainPlayerDiv.style.transform="translate(-50%, -50%)"):(this.config.mainPlayerDiv.style.top="auto",this.config.mainPlayerDiv.style.left="auto",this.config.mainPlayerDiv.style.position="static",this.config.mainPlayerDiv.style.transform="none"),this.config.isAmpProject&&(this.config.containerDiv.style.position="absolute",this.config.containerDiv.style.top="0",this.config.containerDiv.style.left="0",this.config.containerDiv.style.bottom="0",this.config.containerDiv.style.right="0");var s,a;this.flowSkinDisplay&&(this.flowSkinDisplay(n),n&&(s=this.config.flowSkinWrapper.offsetWidth,a=this.config.flowSkinWrapper.offsetHeight)),SekindoServices.fullscreen.isFullscreen||(this.config.playerIframeWindow.frameElement.style.width=((e?e.extFrameWidth:null)||s||this.config.playerWidth)+"px",this.config.playerIframeWindow.frameElement.style.height=((e?e.extFrameHeight:null)||a||this.config.playerHeight)+"px",!0===this.config.iframeSizeImportant&&(this.config.playerIframeWindow.frameElement.style.setProperty("width",this.config.playerIframeWindow.frameElement.style.width,"important"),this.config.playerIframeWindow.frameElement.style.setProperty("height",this.config.playerIframeWindow.frameElement.style.height,"important"))),e.source&&SekindoUtils.applyExternalRules(this.config,"style",e.source),this.config.bus.triggerNote("onPlayerResize",o)},LayoutManager.prototype.flowSkinWrapper=function(e){var t=[],i=[];!function(e,n){function o(e,i,n){for(var r=e.childNodes,l=0;l<r.length;l++)r[l].id&&-1!=r[l].id.indexOf(i)?(s=n,a=r[l]):"SCRIPT"!=r[l].tagName&&r[l].style&&"none"!=r[l].style.display&&(t.push({obj:r[l],display:r[l].style.display}),o(r[l],i,++n))}var s=0,a=null;o(e,n,-1);for(var r=0;r<s;r++){var l=(a=a.parentNode).style.cssText;i.push({obj:a,style:l});var c=t.map(function(e){return e.obj}).indexOf(a);c>-1&&t.splice(c,1)}}(e.contentDocument.body,"Player-Div"),this.flowSkinDisplay=function(e){for(var n=0;n<t.length;n++){var o=t[n].obj;try{o.style.display=e?t[n].display:"none"}catch(e){}}for(n=0;n<i.length-1;n++){o=i[n];try{o.obj.style.cssText=e?o.style:""}catch(e){}}}},LayoutManager.prototype.startRunning=function(){var e=this;if(this.doPreventDefault=function(t){if("papp"==e.config.clientInfo.browser)try{t.preventDefault()}catch(t){}},this.config.playerTemplateData.isLightBox&&this.config.playerIframeWindow.document.body.addEventListener("click",function(t){SekindoServices.fullscreen.isFullscreen&&t.target==t.currentTarget&&e.requestToggleFullscreen(t)}),this.config.flowSkinWrap&&this.flowSkinWrapper(this.config.playerIframeWindow.frameElement),0!=this.config.forceWidth){var t={centeredVideo:!0,width:this.config.forceWidth,height:this.config.forceHeight,extFrameWidth:this.config.width,extFrameHeight:this.config.height};this.playerResize(t)}else this.config.responsive||"slider"==this.config.playerMode||"inRead"==this.config.playerMode||"inUnit"==this.config.playerMode||this.playerResize({});if(this.config.responsive){function i(t){if(!e.blockOnResize&&!e.config.flowStatus&&!SekindoServices.fullscreen.isFullscreen){e.config.videoWidth=t.width;t={reason:"onResizeObj",responsive:!0,width:t.width,height:t.height};e.playerResize(t)}}var n=this.config.containerDiv.parentNode;this.config.containerDiv.parentNode.parentNode.style.width="100%",this.config.containerDiv.parentNode.parentNode.style.height="100%",setTimeout(function(){e.reziseChecker=new SekindoServices.resizeChecker(n,i,e.config)},1),this.config.bus.addCallBack("onFlowStatusChange",function(t){t||e.reziseChecker.checkResize(!0),e.layoutAPI({type:"onFlow",content:t})}),"visible"!==SekindoUtils.visibilityState()&&setTimeout(function(){e.reziseChecker.checkResize(!0)},3e3)}if(this.config.isDesktop){function o(t){e.layoutAPI({type:"exposeLayout",content:t})}this.config.videoIFrameDoc.body.addEventListener("mouseleave",o,!1),this.config.videoIFrameDoc.body.addEventListener("mousemove",o,!1),this.config.videoIFrameDoc.body.addEventListener("mouseenter",o,!1)}this.isScrolledInPlayer=!1,this.onMobileScroll=function(t){e.isScrolledInPlayer=!0},this.onMobileTouch=function(t){(!e.isScrolledInPlayer||(this.isScrolledInPlayer=!1,e.config.flowStatus||SekindoServices.isFullscreen))&&(e.mouseIsOn||e.layoutAPI({type:"exposeLayout",content:t}),clearTimeout(e.mouseOnTimeout),e.mouseOnTimeout=setTimeout(function(){e.mouseIsOn=!0},1e3),clearTimeout(e.mobileShowLayoutTimeout),e.mobileShowLayoutTimeout=setTimeout(function(){e.mouseIsOn&&(clearTimeout(e.mouseOnTimeout),e.mouseIsOn=!1,e.layoutAPI({type:"hideLayout",content:t}))},2500),e.mouseIsOn&&e.onVoidClick())},this.requestToggleFullscreen=function(t){t&&t.preventDefault&&t.preventDefault(),e.config.allowFullScreen&&(t&&t.fullscreenOnly&&SekindoServices.fullscreen.isFullscreen||(SekindoServices.fullscreen.toggle(),"macosx"!=e.config.clientInfo.os||SekindoServices.fullscreen.isFullscreen||this.onFullscreenResize(!0)))},this.openContent=function(t,i){var n=t||e.config.clkUrl||e.config.contentClickUrl;if(n=n.replace("${DOMAIN_MACRO}",e.config.domain),SekindoUtils.validURL(n)){var o=["_top","_blank"].includes(e.clickUrlTarget)?e.clickUrlTarget:"_top";e.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentClickPixel",fileId:e.config.bus.getParam("fileId")}),e.config.bus.triggerNote("APIvideoClickthrough"),setTimeout(function(){window.open(n,o)},100);var s=e.config.reportClickUrl;s&&SekindoUtils.validURL(s)&&SekindoUtils.firePixel(s,e.config.pixelDiv,e.config)}},SekindoServices.fullscreen.onchange(function(t){e.config.fullScreenOn=SekindoServices.fullscreen.isFullscreen,e.config.bus.triggerNote("APIplayerModeChange",SekindoServices.fullscreen.isFullscreen?"fullscreen":"normal"),e.layoutAPI({type:"fullScreen"}),clearTimeout(e.fsTimeout),e.intent("fullscreenChange"),e.onFullscreenResize(),SekindoServices.fullscreen.isFullscreen?(e.mouseIsOn&&(e.config.videoIFrameDoc.body.style.cursor="none",setTimeout(function(){clearTimeout(e.mouseOnTimeout),e.mouseIsOn=!1,e.config.isDesktop||(e.layout.style.visibility="visible")},500)),-1!=e.reportFs&&(e.fsTimeout=setTimeout(function(){e.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentFullScreenPixel"})},e.reportFs))):(clearTimeout(e.mouseOnTimeout),e.mouseIsOn=!1,e.config.isDesktop||(e.layout.style.visibility="visible")),e.config.bus.triggerNote("onFullScreen",{type:SekindoServices.fullscreen.isFullscreen}),e.reportFs=1}),this.onFullscreenResize=function(){e.blockOnResize=!0,setTimeout(function(){if(SekindoServices.fullscreen.isFullscreen)if(e.config.playerTemplateData.isLightBox)t=.65*e.config.playerIframeWindow.frameElement.offsetWidth,i=.65*e.config.playerIframeWindow.frameElement.offsetHeight;else if("requestFS"!=SekindoServices.fullscreen.fs.requestFullscreen&&screen&&screen.width)t=screen.width,i=screen.height;else t=e.config.playerIframeWindow.frameElement.offsetWidth,i=e.config.playerIframeWindow.frameElement.offsetHeight;else var t=null,i=null;SekindoServices.fullscreen.isFullscreen&&!e.isPlaying&&e.config.bus.triggerNote("onUserEvent",{type:"onPlay"});var n={reason:"onFullScreen"+(SekindoServices.fullscreen.isFullscreen?"On":"Off"),width:t,height:i};e.playerResize(n)},1)},this.onTextTracksChanged=function(t){e.layoutAPI({type:"captions",content:t})},this.onVoidClick=function(){switch(e.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentVoidClickPixel"}),e.config.voidClickAction){case"openLink":if(e.config.clkUrl||e.config.contentClickUrl){e.openContent();break}case"none":break;case"fullScreen":default:e.reportFs=-1,e.requestToggleFullscreen({fullscreenOnly:!0})}},this.setHeaderTitle=function(t){e.config.playerTemplateData.showTitle&&e.layoutAPI({type:"headerTitle",content:t})},this.swapBGimage=function(t){"inRead"!=e.config.playerMode&&"inUnit"!=e.config.playerMode&&"slider"!=e.config.playerMode&&(-1==t?e.videoDiv.style.backgroundImage="none":void 0!==e.config.contentPlayList&&void 0!==e.config.contentPlayList[t]&&e.config.contentPlayList[t].bgImg&&(e.videoDiv.style.backgroundRepeat="no-repeat",e.videoDiv.style.backgroundSize="100% 100%",e.videoDiv.style.backgroundImage="url('"+e.config.contentPlayList[t].bgImg+"')"))},this.swapBGimage(0),this.layoutAPI({type:"bgCoverBtnsDisplay",content:4==this.config.isAutoPlay}),this.layoutAPI({type:"captions",content:-1})},LayoutManager.prototype.destruct=function(){this.mobileShowLayoutTimeout&&clearTimeout(this.mobileShowLayoutTimeout),this.touchTimeOut&&clearTimeout(this.touchTimeOut),this.config.playerTemplateData.hasPlaylist&&this.playlist.destruct()},AutoSkipContent.prototype.displayAutoSkipContent=function(){if(this.status!=this.STATUS_DISABLED){var e=this.SKIP_ANIMATION_DURATION_SEC;this.elapsedTime>0&&(e-=this.elapsedTime),this.elapsedTime=-1*(new Date).getTime(),this.status=this.STATUS_RUNNING,this.parent.layoutAPI({type:"displayAutoSkipContent",content:e})}},AutoSkipContent.prototype.hideAutoSkipContent=function(e){this.status!=this.STATUS_DISABLED&&(this.parent.layoutAPI({type:"hideAutoSkipContent",content:e}),e?(this.elapsedTime=0,this.status=this.STATUS_WAITING,this.currVideoTime=-1):this.status=this.STATUS_STAY)},AutoSkipContent.prototype.onAdEvent=function(e){this.status!=this.STATUS_DISABLED&&(e&&this.status==this.STATUS_RUNNING?(this.hideAutoSkipContent(),this.status=this.STATUS_PAUSED,this.elapsedTime=Math.ceil((this.elapsedTime+(new Date).getTime())/1e3)):e||this.status!=this.STATUS_PAUSED||this.displayAutoSkipContent())},AutoSkipContent.prototype.checkTimeToDisplay=function(e){var t=this.SKIP_CONTENT_AFTER_SEC;(-1!=this.currVideoTime||e<4)&&(this.currVideoTime=e),this.parent.config.isRealPrerollEnabled&&1==this.parent.config.isAutoPlay&&-1!=this.parent.config.cachedBids.searchBidId(null,!0)&&(t=15),this.status==this.STATUS_WAITING&&Math.floor(this.currVideoTime)>=t&&this.displayAutoSkipContent()},SekindoFlowManager.prototype.generateCapsule=function(e){this.capsulesStack[e]&&this.capsuleId!=e&&(this.capsuleId=e,this.currCapsule=new SekindoFlowCapsule(this.config,this.capsulesStack[e],this))},SekindoFlowManager.prototype.setCapsulesData=function(){(e={}).id="initiation",e.when=[{callbackID:"adsManagerInited",save:[{id:"adsManagerInited",val:!0},{id:"isAutoPlay",val:"config.isAutoPlay"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"playlistInited",save:{id:"playlistInited",val:!0}}],e.then=[{if:{and:[{id:"adsManagerInited",val:!0},{id:"playlistInited",val:!0},{id:"isRealPrerollEnabled",val:!0}]},do:[{func:"triggerNote",params:{callbackID:"loadNextContentBG",content:!0}}]},{if:{and:[{id:"adsManagerInited",val:!0},{id:"playlistInited",val:!0},{not:{id:"isAutoPlay",val:"0"}}]},do:[{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]},{if:{and:[{id:"adsManagerInited",val:!0},{id:"playlistInited",val:!0},{id:"isAutoPlay",val:"1"},{not:{id:"isRealPrerollEnabled",val:!0}}]},do:[{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!1}}}]},{if:{and:[{id:"adsManagerInited",val:!0},{id:"playlistInited",val:!0},{id:"isAutoPlay",val:"1"}]},do:[{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"resetSaveObj"},{func:"nextCapsule",params:"syncAdsToPlaylist"}]},{if:{and:[{id:"adsManagerInited",val:!0},{id:"playlistInited",val:!0},{id:"isAutoPlay",val:"0"}]},do:[{func:"triggerNote",params:{callbackID:"loadNextContentBG",content:!0}},{func:"destructCurrCapsule"},{func:"resetSaveObj"},{func:"nextCapsule",params:"waitForUser"}]},{if:{and:[{id:"adsManagerInited",val:!0},{id:"playlistInited",val:!0},{id:"isAutoPlay",val:"2"}]},do:[{func:"triggerNote",params:{callbackID:"loadNextContentBG",content:!0}},{func:"destructCurrCapsule"},{func:"resetSaveObj"},{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!0}}},{func:"nextCapsule",params:"simulateAndwaitForUser"}]},{if:{and:[{id:"adsManagerInited",val:!0},{id:"playlistInited",val:!0},{id:"isAutoPlay",val:"3"}]},do:[{func:"triggerNote",params:{callbackID:"loadNextContentBG",content:!0}},{func:"destructCurrCapsule"},{func:"resetSaveObj"},{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!0}}},{func:"nextCapsule",params:"simulatePlaylist"}]},{if:{and:[{id:"adsManagerInited",val:!0},{id:"playlistInited",val:!0},{id:"isAutoPlay",val:"4"}]},do:[{func:"triggerNote",params:{callbackID:"loadNextContentBG",content:!0}},{func:"destructCurrCapsule"},{func:"resetSaveObj"},{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!0}}},{func:"nextCapsule",params:"simulateAndwaitForUserOrImpression"}]}],this.capsulesStack[e.id]=e;(e={}).id="syncAdsToPlaylist",e.when=[{callbackID:"adStarted",save:[{id:"callbackID",val:"adStarted"},{id:"adRunning",val:!0}]},{callbackID:"adCompletedNormal",save:[{id:"callbackID",val:"adCompletedNormal"},{id:"adRunning",val:!1},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"adCompletedNextAd",save:[{id:"callbackID",val:"adCompletedNextAd"},{id:"adRunning",val:!1},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"waterFallEmpty",save:[{id:"callbackID",val:"waterFallEmpty"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"contentEnded",save:[{id:"callbackID",val:"contentEnded"},{id:"contentEnded",val:!0}]},{callbackID:"userSwitchContent",save:[{id:"callbackID",val:"userSwitchContent"}]},{callbackID:"playlistEnded",save:[{id:"callbackID",val:"playlistEnded"},{id:"playlistEnded",val:!0}]},{callbackID:"onUserEvent",content:{type:"onPlay"},save:[{id:"callbackID",val:"onPlay"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"onUserEvent",content:{type:"onPause"},save:[{id:"callbackID",val:"onPause"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]}],e.then=[{if:{and:[{id:"adRunning",val:!0},{id:"callbackID",val:"onPlay"}]},do:[{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]},{if:{and:[{not:{id:"adRunning",val:!0}},{id:"callbackID",val:"onPlay"}]},do:[{func:"triggerNote",params:{callbackID:"resumePlaylist"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]},{if:{id:"callbackID",val:"onPause"},do:[{func:"triggerNote",params:{callbackID:"pausePlaylist"}},{func:"triggerNote",params:{callbackID:"pauseAdsSchedule",content:"pauseAd"}}]},{if:{id:"callbackID",val:"adStarted"},do:[{func:"triggerNote",params:{callbackID:"pausePlaylist"}}]},{if:{or:[{id:"callbackID",val:"adCompletedNormal"},{and:[{id:"callbackID",val:"waterFallEmpty"},{id:"isRealPrerollEnabled",val:!0}]}]},do:[{func:"triggerNote",params:{callbackID:"resumePlaylist"}}]},{if:{id:"callbackID",val:"adCompletedNextAd"},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}}]},{if:{id:"callbackID",val:"contentEnded"},do:[{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"pauseAdsSchedule"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"onContentEnded"}]},{if:{id:"callbackID",val:"userSwitchContent"},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"pauseAdsSchedule"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"onSwitchContent"}]},{if:{id:"callbackID",val:"playlistEnded"},do:[{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"pauseAdsSchedule"}},{func:"triggerNote",params:{callbackID:"loadNextContentBG",content:!0}},{func:"resetSaveObj"},{func:"nextCapsule",params:"waitForUser"}]}],this.capsulesStack[e.id]=e;(e={}).id="onSwitchContent",e.when=[{onInit:!0,save:[{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"},{id:"nextContentIndex",val:"config.nextContentIndex"},{id:"isInit",val:!0}]},{callbackID:"adCompletedNormal",save:[{id:"callbackID",val:"adCompletedNormal"},{id:"adRunning",val:!1},{id:"isInit",val:!1}]},{callbackID:"adCompletedNextAd",save:[{id:"callbackID",val:"adCompletedNextAd"},{id:"adRunning",val:!1},{id:"isInit",val:!1}]},{callbackID:"waterFallEmpty",save:[{id:"callbackID",val:"waterFallEmpty"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"},{id:"isInit",val:!1}]},{callbackID:"userSwitchContent",save:[{id:"callbackID",val:"userSwitchContent"},{id:"isInit",val:!1}]}],e.then=[{if:{and:[{id:"isRealPrerollEnabled",val:!1},{id:"isInit",val:!0}]},do:[{func:"triggerNote",params:{callbackID:"onSwitchContent"}},{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"syncAdsToPlaylist"}]},{if:{and:[{id:"isRealPrerollEnabled",val:!0},{id:"isInit",val:!0}]},do:[{func:"triggerNote",params:{callbackID:"loadSwitchedContentBG"}},{func:"triggerNote",params:{callbackID:"prepareNextContent"}},{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]},{if:{and:[{id:"isRealPrerollEnabled",val:!0},{or:[{id:"callbackID",val:"adCompletedNormal"},{id:"callbackID",val:"waterFallEmpty"}]}]},do:[{func:"triggerNote",params:{callbackID:"onSwitchContent"}},{func:"destructCurrCapsule"},{func:"resetSaveObj"},{
func:"nextCapsule",params:"syncAdsToPlaylist"}]},{if:{id:"callbackID",val:"adCompletedNextAd"},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}}]},{if:{and:[{id:"callbackID",val:"userSwitchContent"},{id:"isRealPrerollEnabled",val:!0}]},do:[{func:"triggerNote",params:{callbackID:"loadSwitchedContentBG"}}]}],this.capsulesStack[e.id]=e;(e={}).id="onContentEnded",e.when=[{onInit:!0,save:[{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]}],e.then=[{if:{id:"isRealPrerollEnabled",val:!0},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"triggerNote",params:{callbackID:"loadNextContentBG",content:!0}}]},{if:{not:{id:"isRealPrerollEnabled",val:!0}},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"triggerNote",params:{callbackID:"resumePlaylist"}}]},{do:[{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"syncAdsToPlaylist"}]}],this.capsulesStack[e.id]=e;(e={}).id="waitForUser",e.when=[{callbackID:"onUserEvent",content:{type:"onPlay"},save:[{id:"callbackID",val:"onPlay"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]}],e.then=[{if:{not:{id:"isRealPrerollEnabled",val:!0}},do:[{func:"triggerNote",params:{callbackID:"resumePlaylist"}}]},{do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"syncAdsToPlaylist"}]}],this.capsulesStack[e.id]=e;(e={}).id="simulatePlaylist",e.when=[{callbackID:"adStarted",save:[{id:"callbackID",val:"adStarted"},{id:"adRunning",val:!0}]},{callbackID:"adCompletedNormal",save:[{id:"callbackID",val:"adCompletedNormal"},{id:"adRunning",val:!1}]},{callbackID:"waterFallEmpty",save:[{id:"callbackID",val:"waterFallEmpty"}]},{callbackID:"contentEnded",save:[{id:"callbackID",val:"contentEnded"},{id:"contentEnded",val:!0}]},{callbackID:"onUserEvent",content:{type:"onPlay"},save:[{id:"callbackID",val:"onPlay"}]},{callbackID:"onUserEvent",content:{type:"onPause"},save:[{id:"callbackID",val:"onPause"}]}],e.then=[{if:{and:[{id:"adRunning",val:!0},{id:"callbackID",val:"onPlay"}]},do:[{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]},{if:{and:[{not:{id:"adRunning",val:!0}},{id:"callbackID",val:"onPlay"}]},do:[{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!0}}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]},{if:{id:"callbackID",val:"onPause"},do:[{func:"triggerNote",params:{callbackID:"pausePlaylist"}},{func:"triggerNote",params:{callbackID:"pauseAdsSchedule"}}]},{if:{id:"callbackID",val:"adStarted"},do:[{func:"triggerNote",params:{callbackID:"pausePlaylist",content:!0}}]},{if:{or:[{id:"callbackID",val:"adCompletedNormal"},{id:"callbackID",val:"waterFallEmpty"}]},do:[{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!0}}}]},{if:{id:"callbackID",val:"contentEnded"},do:[{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]}],this.capsulesStack[e.id]=e;(e={}).id="simulateAndwaitForUser",e.when=[{callbackID:"onUserEvent",content:{type:"onPlay"},save:[{id:"callbackID",val:"onPlay"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"onUserEvent",content:{type:"onPause"},save:[{id:"callbackID",val:"onPause"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"adStarted",save:[{id:"callbackID",val:"adStarted"},{id:"adRunning",val:!0}]},{callbackID:"adCompletedNormal",save:[{id:"callbackID",val:"adCompletedNormal"},{id:"adRunning",val:!1}]},{callbackID:"waterFallEmpty",save:[{id:"callbackID",val:"waterFallEmpty"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"contentEnded",save:[{id:"callbackID",val:"contentEnded"},{id:"contentEnded",val:!0}]}],e.then=[{if:{id:"callbackID",val:"onPause"},do:[{func:"triggerNote",params:{callbackID:"pauseAdsSchedule"}}]},{if:{and:[{id:"adRunning",val:!0},{id:"callbackID",val:"onPlay"}]},do:[{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]},{if:{and:[{not:{id:"isRealPrerollEnabled",val:!0}},{not:{id:"adRunning",val:!0}},{id:"callbackID",val:"onPlay"}]},do:[{func:"triggerNote",params:{callbackID:"stopSimulator",content:!0}},{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!1,userClick:!0}}}]},{if:{and:[{not:{id:"adRunning",val:!0}},{id:"callbackID",val:"onPlay"}]},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"stopSimulator",content:!0}},{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"syncAdsToPlaylist"}]},{if:{id:"callbackID",val:"adStarted"},do:[{func:"triggerNote",params:{callbackID:"pausePlaylist",content:!0}}]},{if:{or:[{id:"callbackID",val:"adCompletedNormal"},{and:[{id:"callbackID",val:"waterFallEmpty"},{id:"isRealPrerollEnabled",val:!0}]}]},do:[{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!0}}}]},{if:{id:"callbackID",val:"contentEnded"},do:[{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]}],this.capsulesStack[e.id]=e;var e;(e={}).id="simulateAndwaitForUserOrImpression",e.when=[{callbackID:"onUserEvent",content:{type:"onPlay"},save:[{id:"callbackID",val:"onPlay"},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"onUserEvent",content:{type:"onPause"},save:[{id:"callbackID",val:"onPause"}]},{callbackID:"adStarted",save:[{id:"callbackID",val:"adStarted"},{id:"adRunning",val:!0}]},{callbackID:"adCompletedNormal",save:[{id:"callbackID",val:"adCompletedNormal"},{id:"adRunning",val:!1},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"adCompletedNextAd",save:[{id:"callbackID",val:"adCompletedNextAd"},{id:"adRunning",val:!1},{id:"isRealPrerollEnabled",val:"config.isRealPrerollEnabled"}]},{callbackID:"waterFallEmpty",save:[{id:"callbackID",val:"waterFallEmpty"}]}],e.then=[{if:{id:"callbackID",val:"onPause"},do:[{func:"triggerNote",params:{callbackID:"pauseAdsSchedule",content:"pauseAd"}}]},{if:{and:[{id:"adRunning",val:!0},{id:"callbackID",val:"onPlay"}]},do:[{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}}]},{if:{and:[{or:[{id:"callbackID",val:"adCompletedNormal"},{and:[{not:{id:"adRunning",val:!0}},{id:"callbackID",val:"onPlay"}]}]},{not:{id:"isRealPrerollEnabled",val:!0}}]},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"stopSimulator",content:!0}},{func:"triggerNote",params:{callbackID:"setIsAutoPlay",content:1}},{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumePlaylist"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"onSwitchContent"}]},{if:{and:[{not:{id:"adRunning",val:!0}},{id:"callbackID",val:"onPlay"},{id:"isRealPrerollEnabled",val:!0}]},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"stopSimulator",content:!0}},{func:"triggerNote",params:{callbackID:"setIsAutoPlay",content:1}},{func:"triggerNote",params:{callbackID:"resetAdsSchedule"}},{func:"triggerNote",params:{callbackID:"resumeAdsSchedule"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"syncAdsToPlaylist"}]},{if:{and:[{id:"callbackID",val:"adCompletedNormal"},{id:"isRealPrerollEnabled",val:!0}]},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"stopSimulator",content:!0}},{func:"triggerNote",params:{callbackID:"setIsAutoPlay",content:1}},{func:"triggerNote",params:{callbackID:"resumePlaylist"}},{func:"resetSaveObj"},{func:"nextCapsule",params:"syncAdsToPlaylist"}]},{if:{id:"callbackID",val:"adCompletedNextAd"},do:[{func:"triggerNote",params:{callbackID:"setPreloader",content:!0}},{func:"destructCurrCapsule"},{func:"triggerNote",params:{callbackID:"stopSimulator",content:!0}},{func:"triggerNote",params:{callbackID:"setIsAutoPlay",content:1}},{func:"resetSaveObj"},{func:"nextCapsule",params:"syncAdsToPlaylist"}]},{if:{id:"callbackID",val:"adStarted"},do:[{func:"triggerNote",params:{callbackID:"pausePlaylist",content:!0}}]},{if:{id:"callbackID",val:"waterFallEmpty"},do:[{func:"triggerNote",params:{callbackID:"resumePlaylist",content:{forceSimulator:!0}}}]}],this.capsulesStack[e.id]=e},SekindoFlowCapsule.prototype.save=function(e){var t=e.save;e.save.id&&(t=[e.save]);for(var i=0;i<t.length;i++){var n=t[i].val,o=t[i].id;if("callbackContent"==o&&(n=e.content),-1!=String(n).indexOf("config.")){var s=n.replace("config.","");n=this.config[s]}this.saveObj[o]=n}},SekindoFlowCapsule.prototype.then=function(){if(this.dataObj.then)for(var e=0;e<this.dataObj.then.length;e++)if(this.dataObj.then[e].if){if(this.dataObj.then[e].if.or){var t=this.dataObj.then[e].if.or,i=this.saveObj;this.gateOr(t,i)&&this.do(this.dataObj.then[e].do)}else if(this.dataObj.then[e].if.and){t=this.dataObj.then[e].if.and,i=this.saveObj;this.gateAnd(t,i)&&this.do(this.dataObj.then[e].do)}else if(this.dataObj.then[e].if.not){t=this.dataObj.then[e].if.not,i=this.saveObj;this.gateNot(t,i)&&this.do(this.dataObj.then[e].do)}else if(this.dataObj.then[e].if){var n=this.dataObj.then[e].if;this.saveObj[n.id]==n.val&&this.do(this.dataObj.then[e].do)}}else this.do(this.dataObj.then[e].do)},SekindoFlowCapsule.prototype.do=function(e){for(var t=this,i=0;i<e.length;i++){var n=e[i];switch(n.func){case"triggerNote":this.config.primisConsoleLog("triggerNote="+JSON.stringify(n.params)),this.config.bus.triggerNote(n.params.callbackID,n.params.content);break;case"updateSaveObj":this.saveObj[n.params.id]=n.params.val;break;case"resetSaveObj":this.saveObj=[];break;case"nextCapsule":if(this.nextC)return;this.nextC=!0,window.primisLog("[[Flow Manager]] - Next Capsule: "+n.params),this.config.primisConsoleLog("nextCapsule="+n.params),setTimeout(function(){t.oner.generateCapsule(n.params)},1);break;case"destructCurrCapsule":this.destruct()}}},SekindoFlowCapsule.prototype.setCallbacks=function(){var e=this.dataObj.when;this.busItems=[];for(var t=0;t<e.length;t++)if(e[t].onInit)this.save(e[t]),this.then();else{var i=e[t].capsuleCallback=new FlowCapsuleCallback(e[t],this),n=this.config.bus.addCallBack(e[t].callbackID,i.execute);this.busItems.push(n)}},SekindoFlowCapsule.prototype.destruct=function(){for(var e=0;e<this.busItems.length;e++)this.config.bus.removeBusItm(this.busItems[e])},SekindoFlowCapsule.prototype.gateAnd=function(e,t){for(var i=!0,n=0;n<e.length;n++){var o=e[n];if(o.or){if(!this.gateOr(o.or,t)){i=!1;break}}else if(o.and){if(!this.gateAnd(o.and,t)){i=!1;break}}else if(o.not){if(!this.gateNot(o.not,t)){i=!1;break}}else if(t[o.id]!=o.val){i=!1;break}}return i},SekindoFlowCapsule.prototype.gateOr=function(e,t){for(var i=0;i<e.length;i++){var n=e[i];if(n.or){if(this.gateOr(n.or,t))return!0}else if(n.and){if(this.gateAnd(n.and,t))return!0}else if(n.not){if(this.gateNot(n.not,t))return!0}else if(t[n.id]==n.val)return!0}return!1},SekindoFlowCapsule.prototype.gateNot=function(e,t){var i=e;return i.or?!this.gateOr(i.or,t):i.and?!this.gateAnd(i.and,t):i.not?!this.gateNot(i.not,t):t[i.id]!=i.val},SekindoBus.prototype.callback=function(e){for(var t=0;t<this.callbacksArray.length;t++)if(e.callbackID==this.callbacksArray[t].callbackID&&e.callbackFunc==this.callbacksArray[t].callbackFunc)return;this.callbacksArray.push(e)},SekindoBus.prototype.trigger=function(e){for(var t=0;t<this.callbacksArray.length;t++){var i;e.callbackID==this.callbacksArray[t].callbackID&&(i=this.callbacksArray[t].callbackFunc(e.content))}return i},SekindoBus.prototype.triggerNote=function(e,t){var i=new SekindoBusNote;return i.callbackID=e,i.content=t,this.trigger(i)},SekindoBus.prototype.addCallBack=function(e,t){var i=new SekindoBusItm;return i.callbackID=e,i.callbackFunc=t,this.callback(i),i},SekindoBus.prototype.removeCallBack=function(e,t){for(var i=0;i<this.callbacksArray.length;i++)e==this.callbacksArray[i].callbackID&&t==this.callbacksArray[i].callbackFunc&&this.callbacksArray.splice(i,1)},SekindoBus.prototype.removeBusItm=function(e){for(var t=0;t<this.callbacksArray.length;t++)e==this.callbacksArray[t]&&this.callbacksArray.splice(t,1)},SekindoAdsManager.prototype.onPlayerResize=function(e,t){if(this.currAdUnit){var i=e.videoWidth||e.width,n=e.adVideoHeight||e.height;this.currAdUnit.videoElement&&(this.currAdUnit.videoElement.width=i,this.currAdUnit.videoElement.height=n),this.currAdUnit.vpaidSlot&&(this.currAdUnit.vpaidSlot.style.width=i,this.currAdUnit.vpaidSlot.style.height=n),this.currAdUnit.wrapper&&this.currAdUnit.wrapper.resizeAd(i,n,"normal")}this.config.responsive&&this.preloadWaterfalls(e),this.config.adsProcessPaused||t||this.config.adsProcessHalter.shouldHalt()||this.loadWaterfall()},SekindoAdsManager.prototype.setAdsSchedule=function(e){this.currAdSchedule=[],this.nextAd=null,this.isAdsScheduleSetInternally=e;var t=!1;for(var i in this.config.adsSchedule)if("pre_roll"==i&&1==this.config.adsSchedule[i])this.config.isDoublePreroll&&this.currAdSchedule.unshift({format:"pre_roll",val:1}),this.currAdSchedule.unshift({format:"pre_roll",val:0});else if("mid_roll"==i)for(var n=this.config.adsSchedule[i],o=0;o<n.length;o++)this.currAdSchedule.push({format:"mid_roll",val:n[o]});else"gap"==i&&(t={format:"gap",val:this.config.adsSchedule[i]});t&&this.currAdSchedule.push(t)},SekindoAdsManager.prototype.pauseAdsSchedule=function(e){if(this.config.adsProcessPaused=!0,this.currAdUnit)if(e&&"skipAd"==e)this.stopAd();else if(this.currAdUnit.wrapper)if(e&&"pauseAd"==e)try{this.currAdUnit.wrapper.pauseAd()}catch(e){}else{try{this.currAdUnit.wrapper.skipAd()}catch(e){}try{this.currAdUnit.wrapper.stopAd()}catch(e){}}else this.currAdUnit.videoElement&&!this.currAdUnit.videoElement.paused&&this.currAdUnit.videoElement.pause()},SekindoAdsManager.prototype.resumeAdsSchedule=function(e){if(this.config.blockAdRequests||(this.config.adsProcessPaused=!1),this.config.isPlaying&&this.currAdUnit&&this.currAdUnit.videoElement&&this.currAdUnit.videoElement.paused&&"none"!=this.currAdUnit.videoElement.parentNode.style.display){var t=this.currAdUnit.videoElement.play();if(t)try{t.then(function(){}).catch(function(e){})}catch(e){}}else this.executeAdsSchedule()},SekindoAdsManager.prototype.setIsAutoPlay=function(e){this.handleC2PWaitTime(!1),4!=e&&this.config.bus.triggerNote("bgCoverBtnsDisplay",!1),this.config.isAutoPlay=e},SekindoAdsManager.prototype.resetAdsSchedule=function(e){this.setAdsSchedule(!1)},SekindoAdsManager.prototype.calcViewableImpGapTimeDiff=function(){var e=0,t=this.config.adsSchedule.gap.impGap;if(this.config.isLastImpSkipped&&"inRead"!=this.config.playerMode&&"slider"!=this.config.playerMode&&"inUnit"!=this.config.playerMode&&(t=60),this.config.lastImpViewableCompleteTime>0){var i=new Date;e=Math.max(0,this.config.lastImpViewableCompleteTime+1e3*t-i.getTime()),0==(e/=1e3)&&(this.config.lastImpViewableCompleteTime=0)}return e},SekindoAdsManager.prototype.executeAdsSchedule=function(){function e(){t.checkMaxImps()?t.currWaterfall?t.currWaterfall.setWaterfall():t.loadWaterfall():(t.leapRoundCounter++,t.generateProcessor())}var t=this;new Date;if(this.timeOutObj&&clearTimeout(this.timeOutObj),!this.config.adsProcessPaused&&!this.config.adsProcessHalter.shouldHalt())if(this.config.pixelDivConstructor&&this.config.pixelDivConstructor.reConstructPixelDiv(),this.currWaterfall){if(!this.config.adIsPlaying&&!(this.currAdSchedule.length<=0||this.nextAd&&this.nextAd==this.currAdSchedule[0]&&"gap"!=this.nextAd.format)){this.nextAd=this.currAdSchedule[0];var i=this.calcViewableImpGapTimeDiff();if("pre_roll"==this.nextAd.format){var n="skip",o=0==this.nextAd.val;o?this.currWaterfall.settings.viewable?this.isAdsScheduleSetInternally?n=this.isImmediateViewablePreroll?"immediately":this.config.isFirstViewablePreroll?"impGap":"skip":this.config.isRealPrerollEnabled?(n="immediately",this.isImmediateViewablePreroll=!0):n="impGap":n="impGap":(n=this.currWaterfall.settings.viewable&&this.canRequset2ndPreroll?"immediately":"skip",this.canRequset2ndPreroll=!1),this.config.primisConsoleLog("executeAdsSchedule is1stPreroll="+o+" VV="+this.currWaterfall.settings.viewable+" decision="+n),this.currAdSchedule.shift(),"skip"==n?this.executeAdsSchedule():"impGap"==n?0==i?e():this.executeAdsSchedule():"immediately"==n&&e()}else if("mid_roll"==this.nextAd.format)if(this.contentVidCurrTime<=this.nextAd.val)var s=this.config.bus.addCallBack("onVideoProgress",function(i){!function(i){i.currTime>=t.nextAd.val&&(t.config.bus.removeBusItm(s),t.currAdSchedule.shift(),e())}(i)});else this.currAdSchedule.shift(),this.executeAdsSchedule();else if("gap"==this.nextAd.format){var a;if(this.config.isRealPrerollEnabled&&this.currWaterfall.settings.viewable&&1==this.config.isAutoPlay){if(-1!=this.config.cachedBids.searchBidId(null,!0))return;return a=this.calcDynamicGapTime(20,15),this.config.primisConsoleLog("executeAdsSchedule GAP cache="+a),void(this.timeOutObj=setTimeout(function(){t.timeOutObj=null,e()},1e3*a))}i>0?(a=i,this.currWaterfall.settings.viewable||(a=Math.min(a,5))):this.config.hadImpression?a=2:(a=this.nextAd.val.attGap||(this.waterfallGap?this.waterfallGap.attGap:15),this.currWaterfall.settings.viewable&&(a=this.calcDynamicGapTime(a,30))),this.config.primisConsoleLog("executeAdsSchedule gapTime="+a+" VV="+this.currWaterfall.settings.viewable),this.timeOutObj=setTimeout(function(){t.timeOutObj=null,e()},1e3*a)}}}else this.loadWaterfall()},SekindoAdsManager.prototype.calcDynamicGapTime=function(e,t){var i=new Date,n=(i.getTime()-this.epochTImestamp)/1e3/t,o=e/2+Math.round(n);if(o<e&&(e=o),0!=this.attemptGapTimestamp){(e-=(i.getTime()-this.attemptGapTimestamp)/1e3)<0&&(e=0),e=Math.round(1e3*e)/1e3}else this.attemptGapTimestamp=i.getTime();return e},SekindoAdsManager.prototype.onUserEvent=function(e){},SekindoAdsManager.prototype.preloadWaterfalls=function(e){if(!this.preloadedWaterfall){this.preloadedWaterfall=!0;var t={width:e?e.videoWidth||e.width:this.config.videoWidth||this.config.width,height:e?e.adVideoHeight||e.height:this.config.adVideoHeight||this.config.height,viewable:!0,type:"normal",gdprIsRequired:this.config.gdprIsRequired,gdprConsent:this.config.gdprInfo.getConsentString(),gdprIsWePass:this.config.gdprInfo.getIsWePass(),ccpaIsRequired:this.config.ccpaIsRequired,ccpaConsent:this.config.ccpaInfo.consent,requestOnly:!0};if("sticky"!=this.config.playerMode&&this.loadWaterfall(t),"flow"==this.config.playerMode||"sticky"==this.config.playerMode){var i=this.config.calcPlayerSizes({source:"preloadFlowWfs",width:this.config.flowWidth,height:this.config.flowHeight});if(t.width==i.videoWidth&&t.height==i.adVideoHeight)return;t.width=i.videoWidth,t.height=i.adVideoHeight,this.loadWaterfall(t)}}},SekindoAdsManager.prototype.loadWaterfall=function(e){function t(e,t){for(var i in e)if("requestOnly"!=i&&void 0!==t[i]&&e[i]!=t[i])return!1;return!0}var i=this,n=this.config.onViewabilityChange.getCurrState(),o=this.config.videoWidth||this.config.width,s=this.config.adVideoHeight||this.config.height;if(e&&e.requestOnly)var a=SekindoUtils.merge2Objs({},e);else a={width:o,height:s,viewable:n,gdprIsRequired:this.config.gdprIsRequired,gdprConsent:this.config.gdprInfo.getConsentString(),gdprIsWePass:this.config.gdprInfo.getIsWePass(),ccpaIsRequired:this.config.ccpaIsRequired,ccpaConsent:this.config.ccpaInfo.consent,requestOnly:!1};if(e&&e.requestOnly&&e.viewable==n&&e.width==o&&e.height==s&&(a.requestOnly=!1),this.currWaterfall&&t(this.currWaterfall.settings,a))return window.primisLog("[Ads Manager][Waterfall loaded] - same as current wf: {width:"+a.width+", height:"+a.height+", viewable:"+a.viewable+"}"),this.currWaterfall.settings.requestOnly=!1,void(!this.currWaterfall.adsProgram.length&&this.currWaterfall.adsProgramLoaded&&setTimeout(function(){i.config.bus.triggerNote("waterFallEmpty")},10));for(var r=0;r<this.waterfallArray.length;r++)if(t(this.waterfallArray[r].settings,a))return window.primisLog("[[Ads Manager]][[Waterfall loaded]] - same as previous wf: {width:"+a.width+", height:"+a.height+", viewable:"+a.viewable+"}"),this.currWaterfall=this.waterfallArray[r],this.currWaterfall.settings.requestOnly=!1,this.limitedImpressions=0,void(this.currWaterfall.adsProgramLoaded&&(this.newAdsProgram=this.currWaterfall.adsProgram,this.waterfallGap=this.currWaterfall.waterfallGap,this.setAdsSchedule(!0),this.executeAdsSchedule()));if(a.requestOnly){var l=new SekindoWaterfallLoader(this.config,a);this.waterfallArray.push(l)}else if(!this.config.adsProcessPaused&&!this.config.adsProcessHalter.shouldHalt()){window.primisLog("[[Ads Manager]][[Waterfall loaded]] - new wf: {width:"+a.width+", height:"+a.height+", viewable:"+a.viewable+"}");l=new SekindoWaterfallLoader(this.config,a);this.waterfallArray.push(l),this.currWaterfall=l}},SekindoAdsManager.prototype.checkMaxImps=function(){if(this.newAdsProgram&&this.newAdsProgram.length){if(this.newAdsProgram.length==this.currWaterfall.limitedImpressions){for(var e=0,t=0;t<this.newAdsProgram.length;t++)this.newAdsProgram[t].impressionCount.val>=this.newAdsProgram[t].maxImpressions&&e++;if(e==this.newAdsProgram.length)return!0}return!1}return!this.currWaterfall},SekindoAdsManager.prototype.stopAd=function(e){this.config.adsProcessPaused=!0,this.currAdUnit&&this.currAdUnit.stopAd(e)},SekindoAdsManager.prototype.generateProcessor=function(){var e=this;if(window.primisLog("[[Ads Manager]]- Generate Processor"),(this.currWaterfall.settings.viewable||!this.config.blockAdRequestsNV&&"inRead"!=this.config.playerMode)&&!this.config.adsProcessPaused&&!this.config.adsProcessHalter.shouldHalt()){if(this.currProcessor&&("processing"==this.currProcessor.status||"started"==this.currProcessor.status)){var t=Math.round(((new Date).getTime()-this.currProcessor.initTimestamp)/1e3);return this.config.primisConsoleLog("regenerateOnFail status="+this.currProcessor.status+" VV="+this.currWaterfall.settings.viewable+" timeDiff="+t),void(this.currProcessor.regenerateOnFail=!0)}this.currProcessor&&"init"==this.currProcessor.status&&this.currProcessor.destruct();var i=SekindoUtils.isIvtHidden(this.config.mainVideoDiv,this.config.playerIframeWindow,this.config.clientInfo,this.config.isAmpProject);if("ok"!=i){if(!this.config.isIvtHiddenPixelFired){var n=this.config.ivtHiddenPixel+"&ivtReason="+i;SekindoUtils.firePixel(n,this.config.pixelDiv,this.config),this.config.isIvtHiddenPixelFired=!0}return this.config.isRealPrerollEnabled&&"pre_roll"===this.nextAd.format&&setTimeout(function(){e.config.bus.triggerNote("waterFallEmpty")},5),void this.executeAdsSchedule()}if(this.config.primisConsoleLog("lounching VV="+this.currWaterfall.settings.viewable),this.config.hadImpression=!1,this.config.isLastImpSkipped=!1,this.isImmediateViewablePreroll=!1,this.currWaterfall.settings.viewable&&(this.attemptGapTimestamp=0,"pre_roll"==this.nextAd.format&&(this.config.isFirstViewablePreroll=!1)),!this.newAdsProgram||!this.newAdsProgram.length)return this.config.isRealPrerollEnabled&&"pre_roll"===this.nextAd.format&&setTimeout(function(){e.config.bus.triggerNote("waterFallEmpty")},5),void this.executeAdsSchedule();if(this.isTriggerAdCompletedNormal=!0,clearTimeout(this.destructOnFailTimeout),this.destructOnFailTimeout=null,this.config.isRealPrerollEnabled&&"pre_roll"==this.nextAd.format&&this.currWaterfall.settings.viewable){this.destructOnFailTimeout=setTimeout(this.destructProcessorOnFail,5e3),this.config.isDoublePreroll&&0==this.nextAd.val&&(this.isTriggerAdCompletedNormal=!1)}this.isCacheBidsOnly=!1,this.config.isRealPrerollEnabled&&1==this.config.isAutoPlay&&"gap"==this.nextAd.format&&this.currWaterfall.settings.viewable&&(this.isCacheBidsOnly=!0);var o=this.nextAd.format;(this.config.isRealPrerollEnabled||4==this.config.isAutoPlay)&&(o="pre_roll");var s={waterfall:this.newAdsProgram,scheduleAdFormat:o,leapRoundCounter:this.leapRoundCounter};window.primisLog("[[Ads Manager]] Generating New Processor"),this.config.primisConsoleLog("SekindoWaterfallLinearProcessor VV="+this.currWaterfall.settings.viewable),this.currProcessor=new SekindoWaterfallLinearProcessor(this.config,s,this)}},SekindoAdsManager.prototype.destruct=function(){if(this.config.adsProcessPaused=!0,this.timeOutObj&&clearTimeout(this.timeOutObj),this.currAdUnit&&this.currAdUnit.destruct(),this.waterfallArray)for(var e=0;e<this.waterfallArray.length;e++)this.waterfallArray[e].destruct();this.currProcessor&&this.currProcessor.destruct(),SekindoUtils.deleteMe(this)},SekindoWaterfallLoader.prototype.sendRequest=function(){var e=(new Date).getTime().toString(),t=this.waterfallUrl.replace("${CBUSTER}",e);this.adsXmlhttp.open("GET",t,!0),this.adsXmlhttp.withCredentials=!0,this.adsXmlhttp.send()},SekindoWaterfallLoader.prototype.destruct=function(){this.waterFallLifeTimeOut&&clearTimeout(this.waterFallLifeTimeOut),this.waterFallLifeTime=0},SekindoWaterfallLinearProcessor.prototype.init=function(){for(this.params.waterfall.sort(function(e,t){return e.optimizedOrder-t.optimizedOrder}),i=0;i<this.params.waterfall.length;i++){var e=this.params.waterfall[i];e.isSkipAd=!1,e.isSkipAttemptTracking=!1,e.trackingEvents.sspImpTrackers=[],e.trackingEvents.sspAttemptTrackers=[],e.bidId=-1,e.isCachedBid=!1,SekindoUtils.adInspection(e,this.config,this.params.scheduleAdFormat,this.params.leapRoundCounter,this.parent.processorCounter)&&(void 0!==window.SKpbjs||"prebidVideo"!=e.serveType&&"sspVideo"!=e.serveType)||(e.isSkipAd=!0)}this.setPrebidBaseConfig(),this.processPrebid()},SekindoWaterfallLinearProcessor.prototype.setPrebidBaseConfig=function(){void 0!==window.SKpbjs&&(window.SKpbjs.setConfig({sekindoLiveServer:this.config.absolutePath,pageUrl:this.config.pubUrl,cache:{url:"https://prebid.adnxs.com/pbc/v1/cache"},userSync:{userIds:[{name:"id5Id",params:{partner:212},storage:{type:"cookie",name:"SKpbjs-id5id",expires:60,refreshInSeconds:50400}},{name:"unifiedId",params:{partner:"j6w8ta9"},storage:{type:"cookie",name:"SKpbjs-unifiedid",expires:60,refreshInSeconds:50400}}],filterSettings:{iframe:{bidders:"*",filter:"include"},image:{bidders:"*",filter:"include"}},syncDelay:1e3}}),this.config.gdprIsRequired&&(2===this.config.gdprInfo.getConsentVersion()?window.SKpbjs.setConfig({consentManagement:{gdpr:{cmpApi:"static",consentData:{getTCData:{tcString:this.config.gdprInfo.getConsentString(),gdprApplies:!0}}}}}):window.SKpbjs.setConfig({consentManagement:{cmpApi:"static",allowAuctionWithoutConsent:!0,consentData:{getConsentData:{gdprApplies:!0,hasGlobalScope:!1,consentData:this.config.gdprInfo.v1.consent},getVendorConsents:{metadata:this.config.gdprInfo.v1.consent,gdprApplies:!0}}}})),this.config.ccpaIsRequired&&window.SKpbjs.setConfig({consentManagement:{usp:{cmpApi:"static",consentData:{getUSPData:{uspString:this.config.ccpaInfo.consent}}}}}))},SekindoCachedBids.prototype.addBid=function(e,t,i){e={isValid:!0,campaignId:t.campaignId,campaignScope:t.campaignScope,size:{w:this.config.videoWidth,h:this.config.adVideoHeight},viewable:i,timestamp:(new Date).getTime(),response:SekindoUtils.merge2Objs({},e)};var n=this.bids.length;return this.bids[n]=e,n},SekindoCachedBids.prototype.getBid=function(e){return e<this.bids.length&&e>=0&&this.bids[e].isValid?this.bids[e]:null},SekindoCachedBids.prototype.invalidateBid=function(e){e<this.bids.length&&e>=0&&(this.bids[e].isValid=!1,this.bids[e].campaignId=-1)},SekindoCachedBids.prototype.searchBidId=function(e,t){if(!this.config.enableBidCaching)return-1;for(var i=new Date,n=0;n<this.bids.length;n++){var o=this.bids[n];if(o.isValid&&(null==e||o.campaignId==e.campaignId)&&t&&i.getTime()-o.timestamp<1e3*o.response.ttl)return n}return-1},SekindoWaterfallLinearProcessor.prototype.processPrebid=function(){function e(e,i){var n="prebidVideo"==e.serveType||"sspVideo"==e.serveType,o="prebidVideo"==i.serveType||"sspVideo"==i.serveType;if(e.campaignPriority!=i.campaignPriority)return e.campaignPriority-i.campaignPriority;if(n&&!o)return-1;if(!n&&o)return 1;if(n&&o){var s=e.rvn;"public"==e.campaignScope&&(s*=t.publicCampaignFactor);var a=i.rvn;return"public"==i.campaignScope&&(a*=t.publicCampaignFactor),-1*(s-a)}return n||o?void 0:e.optimizedOrder-i.optimizedOrder}var t=this;this.highestBid=0,this.publicCampaignFactor=2,t.processPrebidInternal("private",function(){!function(){this.highestBid=this.highestBid/this.publicCampaignFactor,t.processPrebidInternal("public",function(){t.params.waterfall.sort(e),t.generateNextAd()})}()})},SekindoWaterfallLinearProcessor.prototype.processPrebidInternal=function(e,t){function i(t){return"public"==t.campaignScope&&"public"==e||"private"==t.campaignScope&&"private"==e}function n(e,t,i){var n=r.params.waterfall[e],o=r.config.cachedBids.getBid(t).response;n.isCachedBid=i,n.bidId=t,r.highestBid<o.cpm&&(r.highestBid=o.cpm);var s=parseInt(1e3*o.cpm*(n.rvnPct||1));if(n.rvn=s,void 0!==o.sspPixelData&&(s=s+"&"+o.sspPixelData),void 0!==o.sspTrackers&&(void 0!==o.sspTrackers.impTrackers&&(n.trackingEvents.sspImpTrackers=o.sspTrackers.impTrackers),void 0!==o.sspTrackers.attemptTrackers&&(n.trackingEvents.sspAttemptTrackers=o.sspTrackers.attemptTrackers,SekindoUtils.trackSekindoAdEvents("sspAttemptTrackers",null,n,r.config))),n.macro={str:"${VP_RVN_MACRO}",repTo:s},o.vastXml){var a=o.vastXml;if("string"==typeof a){if(window.ActiveXObject){(l=new ActiveXObject("Microsoft.XMLDOM")).async="false",l.loadXML(a)}else var l=(new DOMParser).parseFromString(a,"text/xml");a=l}n.vastURL=null,n.vastXml=a}else n.vastURL=o.vastUrl,n.vastXml=null}function o(e){for(var t=e.bids[0].floorPath,i=e.bids[0].params,n=0,o=t[n];n<t.length-1;n++)i=i[o=t[n]];o=t[n],r.highestBid>0&&i[o]<r.highestBid&&(i[o]=r.highestBid)}function s(e,t){var i="prebid"==e?"amazon":"prebid";if(d[e].response=t,d[e].status="ready","wait"!=d[i].status){var n={};for(var o in d)if("ready"==d[o].status)for(var s in d[o].response)n[s]=d[o].response[s];a(n)}}function a(e){for(var o=0;o<r.params.waterfall.length;o++){var s=r.params.waterfall[o];if(i(s)&&("prebidVideo"==s.serveType||"sspVideo"==s.serveType)){var a="prebidVideo"==s.serveType?"adUnit_"+o:"adUnit_ssp",l=0;if(e.hasOwnProperty(a)&&e[a].bids.length)for(var c=0,d=e[a].bids.length;c<d;c++)if(e[a].bids[c].cpm>0&&("prebidVideo"==s.serveType||e[a].bids[c].referenceId==o)&&(e[a].bids[c].vastUrl||e[a].bids[c].vastXml)){n(o,h=r.config.cachedBids.addBid(e[a].bids[c],s,r.params.waterfall.settings.viewable),!1),SekindoUtils.trackSekindoAdEvents("response",null,s,r.config),l=!0;break}if(!l){var h;-1!=(h=r.config.cachedBids.searchBidId(s,r.params.waterfall.settings.viewable))?n(o,h,!0):s.isSkipAd=!0}}}t()}var r=this,l=!0,c=[],d={prebid:{status:"inactive",response:{}},amazon:{status:"inactive",response:{}}};this.config.prebidAdUnitCodes.forEach(function(e){window.SKpbjs.removeAdUnit(e)}),this.config.prebidAdUnitCodes=[],this.a9Bidder=null,this.config.isRealPrerollEnabled&&1==this.config.isAutoPlay&&this.params.waterfall.settings.viewable&&-1!=this.config.cachedBids.searchBidId(null,!0)&&(l=!1);for(var h=0;h<this.params.waterfall.length;h++){var p=this.params.waterfall[h];if(i(p)&&!p.isSkipAd)if("prebidVideo"==p.serveType){if("a9Custom"==p.preBidData.params.bidder){if(this.a9Bidder)continue;this.a9Bidder=new SekindoA9Bidder(this.config,p.preBidData.params.params,s,"adUnit_"+h)}else{"sekindoGeneralVast"!=(f={code:"adUnit_"+h,bids:[JSON.parse(JSON.stringify(p.preBidData.params))],sizes:[this.config.videoWidth,this.config.adVideoHeight],mediaTypes:{video:{context:"instream",playerSize:[this.config.videoWidth,this.config.adVideoHeight],mimes:["video/mp4","application/javascript"],maxduration:200,protocols:"rubicon"==p.preBidData.params.bidder?[2,3,5,6]:[1,2,3,4,5,6],linearity:1,api:"rubicon"==p.preBidData.params.bidder?[2]:[1,2]}}}).bids[0].bidder&&"spotexSKcustom"!=f.bids[0].bidder||!f.bids[0].params.vastUrl||(f.bids[0].params.vastUrl=f.bids[0].params.vastUrl.replace("${GDPR}",this.config.gdprIsRequired),f.bids[0].params.vastUrl=f.bids[0].params.vastUrl.replace("${GDPR_CONSENT}",encodeURIComponent(this.config.gdprInfo.getConsentString())),f.bids[0].params.vastUrl=f.bids[0].params.vastUrl.replace("${US_PRIVACY}",encodeURIComponent(this.config.ccpaInfo.consent))),
(void 0!=f.bids[0].floorPath||f.bids[0].floorPath.length>0)&&o(f),window.SKpbjs.addAdUnits(f),this.config.prebidAdUnitCodes.push(f.code)}p.isSkipAttemptTracking=!0,l&&SekindoUtils.trackSekindoAdEvents("onAttempt",null,p,this.config)}else"sspVideo"==p.serveType&&(p.preBidData.params.referenceId=h,c.push(p.preBidData.params),p.isSkipAttemptTracking=!0,l&&SekindoUtils.trackSekindoAdEvents("onAttempt",null,p,this.config))}if(c.length>0){var u={bidder:"sekindoInternal",params:{data:this.params.waterfall.sspInfo}};u.params.data.gdpr=this.config.gdprIsRequired,u.params.data.gdprConsent=encodeURIComponent(this.config.gdprInfo.getConsentString()),u.params.data.isWePassGdpr=this.config.gdprInfo.getIsWePass(),u.params.data.ccpa=this.config.ccpaIsRequired,u.params.data.ccpaConsent=encodeURIComponent(this.config.ccpaInfo.consent),u.params.data.minBid=this.highestBid,u.params.data.extUserIds=window.SKpbjs.getUserIdsAsEids(),u.params.data.campaigns={},c.forEach(function(e){u.params.data.campaigns[e.campaignId]=e});var f={code:"adUnit_ssp",bids:[u],sizes:[this.config.videoWidth,this.config.adVideoHeight],mediaTypes:{video:{context:"instream",playerSize:[this.config.videoWidth,this.config.adVideoHeight]}}};window.SKpbjs.addAdUnits(f),this.config.prebidAdUnitCodes.push(f.code)}this.status="processing",l?this.config.prebidAdUnitCodes.length>0||this.a9Bidder?(this.config.prebidAdUnitCodes.length>0&&(d.prebid.status="wait",window.SKpbjs.setConfig({schain:{validation:"strict",config:this.config.schain[e]}}),window.SKpbjs.requestBids({timeout:3e3,bidsBackHandler:function(e){s("prebid",e)},adUnitCodes:this.config.prebidAdUnitCodes})),this.a9Bidder&&(d.amazon.status="wait",this.a9Bidder.run())):setTimeout(function(){t()},10):setTimeout(function(){a({})},10)},SekindoWaterfallLinearProcessor.prototype.generateNextAd=function(){if(this.config.adsProcessPaused||this.config.adsProcessHalter.shouldHalt())return this.status="paused",void this.destruct();if(!this.params.waterfall||!this.params.waterfall.length)return this.status=null,this.parent.executeAdsSchedule(),void this.destruct();if(!this.parent.nextAd)return this.status=null,this.parent.executeAdsSchedule(),void this.destruct();if(!this.currAdUnit||"started"!=this.currAdUnit.adProccessStatus){if(!this.params.waterfall.settings)return this.config.bus.triggerNote("waterFallEmpty"),this.status=null,this.parent.executeAdsSchedule(),void this.destruct();if(this.parent.isCacheBidsOnly)return this.status=null,this.regenerateOnFail&&(this.config.primisConsoleLog("isCacheBidsOnly regenerateOnFail detected"),this.parent.setAdsSchedule(!0)),this.parent.executeAdsSchedule(),void this.destruct();if(this.index++,this.params.waterfall.length<=this.index)return this.config.bus.triggerNote("waterFallEmpty"),this.status=null,this.parent.executeAdsSchedule(),void this.destruct();var e=this.params.waterfall[this.index];if(e.adUnit=null,!e)return this.config.bus.triggerNote("waterFallEmpty"),this.status=null,this.parent.executeAdsSchedule(),void this.destruct();window.primisLog("[[WFLinearProcessor]] - generateNextAd"),this.status="processing";var t=new SekindoAdUnit(this.config,e,this);e.adUnit=t,this.adUnitsArray&&this.adUnitsArray.push(t)}},SekindoWaterfallLinearProcessor.prototype.adUnitReport=function(e){function t(e){i.config.adIsPlaying=!1;var t=e.val;if(t.adProccessStatus="complete",t.params&&(t.params.adUnit=null),t.destruct(),i.currAdUnit=i.parent.currAdUnit=null,i.status="complete",i.status=null,i.config.isLastImpViewable){var n=new Date;i.config.lastImpViewableCompleteTime=n.getTime()}i.parent.executeAdsSchedule(),i.destruct()}var i=this;switch(window.primisLog("[[WFLinearProcessor]] - adUnitReport: "+e.type),e.type){case"startingAd":this.status="started";break;case"started":(n=e.val).adProccessStatus="started",this.currAdUnit=this.parent.currAdUnit=n,this.status="started",this.config.adIsPlaying=!0,this.config.hadImpression=!0,this.config.isLastImpViewable=!!this.config.onViewabilityChange.getCurrState(),this.config.isLastImpViewable&&(this.config.isFirstViewablePreroll=!1),!this.currAdUnit.videoElement||this.currAdUnit.videoElement.width==this.config.videoWidth&&this.currAdUnit.videoElement.height==this.config.adVideoHeight||this.parent.onPlayerResize({videoWidth:this.config.videoWidth,videoHeight:this.config.videoHeight,adVideoHeight:this.config.adVideoHeight},!0);break;case"fail":if(this.config.adIsPlaying){e.type="complete",t(e);break}this.config.adIsPlaying=!1;var n;(n=e.val).adProccessStatus="fail",n.params.adUnit=null,n.params=null,n.destruct(),this.currAdUnit=this.parent.currAdUnit=null,this.destructOnFail?(this.status="complete",this.config.bus.triggerNote("waterFallEmpty"),this.parent.executeAdsSchedule(),this.destruct()):this.regenerateOnFail?(this.config.primisConsoleLog("regenerateOnFail detected"),this.status="complete",this.parent.setAdsSchedule(!0),this.parent.executeAdsSchedule(),this.destruct()):this.generateNextAd();break;case"complete":t(e)}},SekindoWaterfallLinearProcessor.prototype.destruct=function(){if(this.adUnitsArray)for(var e=0;e<this.adUnitsArray.length;e++)this.adUnitsArray[e].destruct();this.parent&&this.parent.currProcessor==this&&(this.parent.currProcessor=null),SekindoUtils.deleteMe(this)},SekindoAdUnit.prototype.adsLoaded=function(e){if(this.params&&!this.params.linear){if(this.adProccessStatus="loaded",this.config.adsProcessPaused||this.config.adsProcessHalter.shouldHalt())return this.adProccessStatus="complete",void this.parent.adUnitReport({type:"fail",val:this});if(null!=e){this.originParams=this.params;var t=e.getAd(!1,!0);if(t){if(this.config.blockVpaidjsTube&&t.vastStr){var i=t.vastStr.indexOf("vpaidjs-2018");if(-1!=i&&parseInt(t.vastStr.substr(i+12,2))>5)return void this.parent.adUnitReport({type:"fail",val:this})}if(this.config.blockVpaidjsYahoo&&t.vastStr){if(-1!=t.vastStr.indexOf("vista.js"))return void this.parent.adUnitReport({type:"fail",val:this})}if(this.params=SekindoUtils.merge2Objs(t,this.params),this.params.linear){this.params.sentImpression=!1,this.progressArray=new Array;for(var n=0;n<this.params.getTrackingPoints().length;n++){var o=this.params.getTrackingPoints()[n];-1!=o.event.indexOf("progress")&&this.progressArray.push(o)}var s=this.params.linear.getAllMedias();if(s.length&&0!=s.length){var a=SekindoUtils.detectMediaType(s);if(this.config.isDesktop&&a.linear)this.runFunc=this.loadLinearContent,this.runSrc=a.linear.src;else if(!this.config.isDesktop&&a.mobileLinear)this.runFunc=this.loadLinearContent,this.runSrc=a.mobileLinear.src;else{if(!a.jsVpaid)return void this.parent.adUnitReport({type:"fail",val:this});this.params.reportDebugImpPixelId&&this.params.debugWFManagerId&&this.config.LogRest.performCall("liveVideoWaterfall","SetVastStatus",[this.params.reportDebugImpPixelId,"VPAID proccessed"],this.params.debugWFManagerId),this.runFunc=this.loadVPAIDContent,this.runSrc=a.jsVpaid.src}"vast"==this.params.serveType&&SekindoUtils.trackSekindoAdEvents("response",null,this.params,this.config),SekindoUtils.trackSekindoAdEvents("win",null,this.params,this.config),this.runFunc(this.runSrc)}else this.parent.adUnitReport({type:"fail",val:this})}else this.parent.adUnitReport({type:"fail",val:this})}else this.parent.adUnitReport({type:"fail",val:this})}else this.parent.adUnitReport({type:"fail",val:this})}},SekindoAdUnit.prototype.loadExternalSDK=function(){if(this.config.adsProcessPaused||this.config.adsProcessHalter.shouldHalt())this.parent.adUnitReport({type:"fail",val:this});else{this.adType=this.params.serveType,window.primisLog("[[Ad Unit]] - loadExternalSDK: "+this.adType),this.wrapper&&this.destructWrapper();var e=[];this.generateVpaidSlot(),e.slot=this.vpaidSlot,this.generateVideoElement(),this.videoElement.style.zIndex=-1,this.videoElement.style.position="absolute",this.videoElement.style.top="0px",this.videoElement.style.left="0px",this.addVideoListeners(),e.videoSlot=this.videoElement,this.params.track=function(){},this.params.environmentVars=e,"ima"==this.adType&&(this.wrapper=new SekindoIMAWrapper(this.config,this.params,this))}},SekindoAdUnit.prototype.loadVPAIDContent=function(e){window.primisLog("[[Ad Unit]] - loadVPAIDContent"),this.wrapper&&this.destructWrapper(),this.adType="vpaid";var t=this.params.linear.adParameters,i=[];this.generateVpaidSlot(),i.slot=this.vpaidSlot,this.config.videoSlot?this.videoElement=this.config.videoSlot:this.generateVideoElement(),this.addVideoListeners(),i.videoSlot=this.videoElement,this.params.VPAIDUrl=e,this.params.creativeData=t,this.params.environmentVars=i,this.wrapper=new SekindoVPAIDWrapper(this.config,this.params,this)},SekindoAdUnit.prototype.destructWrapper=function(){this.wrapper&&(this.wrapper.destruct(),this.wrapper=null)},SekindoAdUnit.prototype.loadLinearContent=function(e){if(window.primisLog("[[Ad Unit]] - loadLinearContent"),this.config.adsProcessPaused||this.config.adsProcessHalter.shouldHalt())this.parent.adUnitReport({type:"fail",val:this});else{this.adType="linear",this.currSrc=decodeURI(e),this.generateVpaidSlot(),this.config.videoSlot?this.videoElement=this.config.videoSlot:this.generateVideoElement(),this.addVideoListeners(),this.addLinearListeners(),this.videoElement.src=this.currSrc;var t=this.videoElement.play();if(t)try{t.then(function(){}).catch(function(e){})}catch(e){}}},SekindoAdUnit.prototype.generateVpaidSlot=function(){var e=this.config.videoWidth||this.config.width,t=this.config.adVideoHeight||this.config.height;this.vpaidSlot&&this.vpaidSlot.parentNode&&this.disposeVpaidSlot(),this.vpaidSlot=this.config.videoIFrameDoc.createElement("div"),this.vpaidSlot.style.width=e+"px",this.vpaidSlot.style.height=t+"px",this.vpaidSlot.style.marginLeft="auto",this.vpaidSlot.style.marginRight="auto",this.vpaidSlot.style.zIndex=-3,this.vpaidSlot.style.position="absolute",this.vpaidSlot.style.left="-3000px",this.vpaidSlot.style.top="50%",this.vpaidSlot.style.transform="translate(0, -50%)",this.vpaidSlot.style.overflow="hidden",this.vpaidSlot.id="slotContainer",this.config.bus.triggerNote("addChild",{visual:this.vpaidSlot,destiny:"videoAd"})},SekindoAdUnit.prototype.generateVideoElement=function(){var e=this.config.videoWidth||this.config.width,t=this.config.adVideoHeight||this.config.height;this.videoElement&&this.videoElement.parentNode&&this.disposeVideoElement(),this.videoElement=this.config.videoIFrameDoc.createElement("video"),"Facebook"!=this.config.clientInfo.extra.browser&&"app"!=this.config.clientInfo.browser||(this.videoElement.poster="none",this.videoElement.controls=!1),this.videoElement.width=e,this.videoElement.height=t,this.videoElement.style.top="0px",this.videoElement.muted=this.config.isMuted,this.videoElement.volume=this.config.volume,this.videoElement.id="adVideoElement",this.videoElement.playsInline=!0,this.videoElement.autoplay=!0,this.vpaidSlot.appendChild(this.videoElement),this.params.bgColor&&(this.videoElement.style.backgroundColor=this.params.bgColor,this.videoElement.parentNode.style.background=this.params.bgColor),"ios"==this.config.clientInfo.os&&(this.iosVidWrapper=new SekindoServices.iosVidAutoplayWrapper(this.videoElement))},SekindoAdUnit.prototype.disposeVpaidSlot=function(){this.vpaidSlot&&(this.vpaidSlot.parentNode&&this.vpaidSlot.parentNode.removeChild(this.vpaidSlot),this.vpaidSlot=null)},SekindoAdUnit.prototype.disposeVideoElement=function(){this.videoElement&&(this.iosVidWrapper&&this.iosVidWrapper.destruct(),delete this.iosVidWrapper,this.removeListeners(),this.videoElement.parentNode&&this.videoElement.parentNode.removeChild(this.videoElement),this.videoElement.destruct&&this.videoElement.destruct(),delete this.videoElement,this.videoElement=null)},SekindoAdUnit.prototype.addVideoListeners=function(){this.videoElement.addEventListener("volumechange",this.videoEventCallback),this.videoElement.addEventListener("pause",this.videoEventCallback)},SekindoAdUnit.prototype.addLinearListeners=function(){this.videoElement.addEventListener("playing",this.videoEventCallback),this.videoElement.addEventListener("play",this.videoEventCallback),this.videoElement.addEventListener("ended",this.videoEventCallback),this.videoElement.addEventListener("click",this.videoEventCallback),this.videoElement.addEventListener("error",this.videoEventCallback),this.videoElement.addEventListener("skipped",this.videoEventCallback)},SekindoAdUnit.prototype.removeListeners=function(){this.videoElement&&(this.videoElement.removeEventListener("timeupdate",this.videoProgressEventCallback),this.videoElement.removeEventListener("playing",this.videoEventCallback),this.videoElement.removeEventListener("play",this.videoEventCallback),this.videoElement.removeEventListener("ended",this.videoEventCallback),this.videoElement.removeEventListener("click",this.videoEventCallback),this.videoElement.removeEventListener("volumechange",this.videoEventCallback),this.videoElement.removeEventListener("pause",this.videoEventCallback),this.videoElement.removeEventListener("error",this.videoEventCallback),this.videoElement.removeEventListener("skipped",this.videoEventCallback),this.checkAdViewability(!1))},SekindoAdUnit.prototype.stopAd=function(e){if(e&&this.removeListeners(),"start"==this.adVideoStatus)if(this.wrapper)this.wrapper.stopAd();else{var t=document.createEvent("Event");t.initEvent("ended",!0,!1),this.videoElement.dispatchEvent(t)}},SekindoAdUnit.prototype.onVideoEvent=function(e){if("linear"==this.adType)switch(e.type){case"play":case"playing":if(this.config.adsProcessPaused||this.config.adsProcessHalter.shouldHalt())return this.videoElement&&this.videoElement.parentNode&&(this.videoElement.parentNode.style.display="none"),this.adVideoStatus="null",this.adProccessStatus="complete",this.disposeVideoElement(),this.params.adUnit=null,this.params=null,void this.parent.adUnitReport({type:"complete",val:this});if("start"!=this.adVideoStatus){var t=SekindoUtils.getApiObjectForEvent("adStarted");if(!isNaN(this.rvn)&&!isNaN(this.config.videoPubCosts.pubRevshare)){var i="private"==this.params.campaignScope?this.config.videoPubCosts.servingFee:0;t.servingFee=this.config.videoPubCosts.isServingFeeRevshare?this.rvn*i/1e3:i;var n="public"==this.params.campaignScope?this.config.videoPubCosts.pubRevshare:1;t.impValue=this.rvn*n/1e3}this.config.bus.triggerNote("adStarted",{type:"linear",rvn:this.rvn,skipTime:this.params.skipTime,controls:this.params.controls}),this.params.track("creativeView",null,null,this.config.pixelDiv,this.config),this.params.track("start",null,null,this.config.pixelDiv,this.config),SekindoUtils.trackSekindoAdEvents("adStart",null,this.params,this.config),SekindoUtils.trackSekindoAdEvents("impression",null,this.params,this.config),this.config.bus.triggerNote("APIadStarted",t),SekindoUtils.trackSekindoAdEvents("sspImpTrackers",null,this.params,this.config),this.parent.adUnitReport({type:"started",val:this}),this.checkAdViewability(!0),this.params.impressionCount.val+=1,this.constructProgressEvents(),this.adVideoStatus="start",this.progressStatus="start"}this.videoElement&&this.videoElement.parentNode&&(this.videoElement.parentNode.style.display="block"),this.vpaidSlot.style.zIndex=3,this.vpaidSlot.style.left="0px",this.params.reportDebugImpPixelId&&this.params.debugWFManagerId&&this.config.LogRest.performCall("liveVideoWaterfall","SetVastStatus",[this.params.reportDebugImpPixelId,"Impression (from VAST)"],this.params.debugWFManagerId),this.config.bus.triggerNote("onVideoEvent",{type:"playing",val:{player:"adsManager"}});break;case"skipped":this.parent.parent.isTriggerAdCompletedNormal=!0;case"ended":this.videoElement&&this.videoElement.parentNode&&(this.videoElement.parentNode.style.display="none"),this.config.bus.triggerNote("adCompleted"),this.parent.parent.isTriggerAdCompletedNormal?this.config.bus.triggerNote("adCompletedNormal"):(this.config.bus.triggerNote("adCompletedNextAd"),this.parent.parent.canRequset2ndPreroll=!0),"start"==this.adVideoStatus&&(this.checkAdViewability(!1),"ended"==e.type&&(this.config.bus.triggerNote("APIadCompleted"),this.params.track("complete",null,null,this.config.pixelDiv,this.config),SekindoUtils.trackSekindoAdEvents("complete",null,this.params,this.config))),this.adVideoStatus="null",this.adProccessStatus="complete",this.disposeVideoElement(),this.params.adUnit=null,this.params=null,this.parent.adUnitReport({type:"complete",val:this});break;case"error":this.videoElement&&this.videoElement.parentNode&&(this.videoElement.parentNode.style.display="none"),"start"==this.adVideoStatus&&(this.config.bus.triggerNote("APIadCompleted"),this.config.bus.triggerNote("adCompleted"),this.checkAdViewability(!1)),this.adVideoStatus="null",this.adProccessStatus="complete",this.disposeVideoElement(),this.parent.adUnitReport({type:"fail",val:this});break;case"click":this.params.track("click",null,null,this.config.pixelDiv,this.config),SekindoUtils.trackSekindoAdEvents("clickThrough",null,this.params,this.config);var o=this.params.linear.getClickThrough();window.open(o,"_blank");break;case"volumechange":var s=!this.videoElement||this.videoElement.muted,a=this.videoElement?this.videoElement.volume:-1;this.config.bus.triggerNote("onVideoEvent",{type:"volumechange",val:{muted:s,volume:a,player:"adsManager"}});break;case"pause":this.config.bus.triggerNote("onVideoEvent",{type:"pause",val:{player:"adsManager"}})}},SekindoAdUnit.prototype.onVpaidEvent=function(e){var t=this,i="string"==typeof e?e:e.type;switch(window.primisLog("[[Ad Unit]] - onVpaidEvent: "+i),i){case"onAdLoaded":if(this.reportsBlocker.onAdLoaded)break;if(this.reportsBlocker.onAdLoaded=!0,this.wrapper.iFrameDoc)for(var n=this.wrapper.iFrameDoc.getElementsByTagName("script"),o=0;o<n.length;o++)if(-1!=n[o].src.indexOf("bundle.clearstream.tv/bundle")){this.wrapper.doNotUseSetAdVolume=!0;break}this.config.adsProcessPaused||this.config.adsProcessHalter.shouldHalt()?(this.disposeVideoElement(),this.disposeVpaidSlot(),this.parent.adUnitReport({type:"fail",val:this})):(this.config.isMuted&&(this.wrapper.setAdVolume(0),this.videoElement&&(this.videoElement.muted=!0)),this.parent.adUnitReport({type:"startingAd",val:this}),this.wrapper.startAd(),this.reportsBlocker={},this.reportsBlocker.onAdLoaded=!0,this.config.isMuted&&(this.wrapper.setAdVolume(0),this.videoElement&&(this.videoElement.muted=!0)));break;case"onAdPaused":this.config.bus.triggerNote("onVpaidEvent",{type:"pause",val:{player:"adsManager"}}),this.config.bus.triggerNote("APIadPause");break;case"onAdPlaying":this.config.bus.triggerNote("onVpaidEvent",{type:"playing",val:{player:"adsManager"}}),this.config.bus.triggerNote("APIadPlay");break;case"onAdUserAcceptInvitation":case"onAdUserMinimize":break;case"onAdUserClose":if(this.reportsBlocker.onAdUserClose)break;this.reportsBlocker.onAdUserClose=!0,this.config.bus.triggerNote("APIadCompleted"),this.onAdComplete(e.params);break;case"onAdError":this.forceSkipAdTimeout&&clearTimeout(this.forceSkipAdTimeout),this.disposeVideoElement(),this.disposeVpaidSlot(),"start"==this.adVideoStatus&&(this.config.bus.triggerNote("APIadCompleted"),this.config.bus.triggerNote("adCompleted"),this.parent.parent.isTriggerAdCompletedNormal?this.config.bus.triggerNote("adCompletedNormal"):(this.config.bus.triggerNote("adCompletedNextAd"),this.parent.parent.canRequset2ndPreroll=!0)),this.parent.adUnitReport({type:"fail",val:this});break;case"onAdSkippableStateChange":case"onAdExpandedChange":case"onAdSizeChange":case"onAdDurationChange":case"onAdRemainingTimeChange":break;case"onAdImpression":if(this.reportsBlocker.onAdImpression)break;this.reportsBlocker.onAdImpression=!0;var s=SekindoUtils.getApiObjectForEvent("adStarted");if(!isNaN(this.rvn)&&!isNaN(this.config.videoPubCosts.pubRevshare)){var a="private"==this.params.campaignScope?this.config.videoPubCosts.servingFee:0;s.servingFee=this.config.videoPubCosts.isServingFeeRevshare?this.rvn*a/1e3:a;var r="public"==this.params.campaignScope?this.config.videoPubCosts.pubRevshare:1;s.impValue=this.rvn*r/1e3}this.adVideoStatus="start",this.params.track("creativeView",null,null,this.config.pixelDiv,this.config),SekindoUtils.trackSekindoAdEvents("impression",e.macro||null,this.params,this.config),this.config.bus.triggerNote("APIadStarted",s),SekindoUtils.trackSekindoAdEvents("sspImpTrackers",null,this.params,this.config),this.checkAdViewability(!0),this.config.bus.triggerNote("changeTitle",""),this.params.impressionCount.val+=1,this.videoElement&&this.videoElement.parentNode&&(this.videoElement.parentNode.style.display="block"),this.vpaidSlot.style.zIndex=SekindoUtils.getHighestZIndex(this.config.videoIFrameWindow,"div")+1,this.vpaidSlot.style.left="0px",this.config.isMuted?(this.wrapper.setAdVolume(0),this.videoElement&&(this.videoElement.muted=!0)):(this.wrapper.setAdVolume(this.config.volume),this.videoElement&&(this.videoElement.muted=!1)),this.videoElement&&this.params.bgColor&&(this.videoElement.style.backgroundColor=this.params.bgColor,this.videoElement.parentNode.style.background=this.params.bgColor);break;case"onAdClickThru":this.params.track("click",null,null,this.config.pixelDiv,this.config),SekindoUtils.trackSekindoAdEvents("clickThrough",null,this.params,this.config),this.config.bus.triggerNote("APIadClickthrough");break;case"onAdInteraction":break;case"onAdVideoStart":if(this.config.bus.triggerNote("onVpaidEvent",{type:"playing",val:{player:"adsManager"}}),this.reportsBlocker.onAdVideoStart)break;this.reportsBlocker.onAdVideoStart=!0,this.adVideoStatus="start",this.params.track("start",null,null,this.config.pixelDiv,this.config),SekindoUtils.trackSekindoAdEvents("adStart",null,this.params,this.config),this.videoElement&&this.videoElement.parentNode&&(this.videoElement.parentNode.style.display="block");var l=this.params.skipTime,c=this.params.controls;e.params&&e.params.isAdHasSkip&&(l=-1,c=!1),this.config.bus.triggerNote("adStarted",{type:"vpaid",rvn:this.rvn,skipTime:l,controls:c}),this.parent.adUnitReport({type:"started",val:this});break;case"onAdVideoFirstQuartile":if(this.reportsBlocker.onAdVideoFirstQuartile)break;this.reportsBlocker.onAdVideoFirstQuartile=!0,this.params.track("firstQuartile",null,null,this.config.pixelDiv,this.config),this.config.bus.triggerNote("APIadFirstQuartile");break;case"onAdVideoMidpoint":if(this.reportsBlocker.onAdVideoMidpoint)break;this.reportsBlocker.onAdVideoMidpoint=!0,this.params.track("midpoint",null,null,this.config.pixelDiv,this.config),this.config.bus.triggerNote("APIadMidQuartile");break;case"onAdVideoThirdQuartile":if(this.reportsBlocker.onAdVideoThirdQuartile)break;this.reportsBlocker.onAdVideoThirdQuartile=!0,this.params.track("thirdQuartile",null,null,this.config.pixelDiv,this.config),this.config.bus.triggerNote("APIadThirdQuartile");break;case"onAdVideoComplete":if(this.reportsBlocker.onAdVideoComplete)break;this.reportsBlocker.onAdVideoComplete=!0,this.params.track("complete",null,null,this.config.pixelDiv,this.config),this.config.bus.triggerNote("APIadCompleted"),"start"==this.adVideoStatus&&(this.videoCompleteTimeout&&clearTimeout(this.videoCompleteTimeout),this.videoCompleteTimeout=setTimeout(function(){"start"==t.adVideoStatus&&(t.reportsBlocker.onStopAd||(t.reportsBlocker.onStopAd=!0,SekindoUtils.trackSekindoAdEvents("complete",null,t.params,t.config),t.onAdComplete(e.params)))},1e3)),this.adVideoStatus="null";break;case"onAdLinearChange":break;case"onStartAd":if(this.reportsBlocker.onStartAd)break;this.reportsBlocker.onStartAd=!0,this.config.isMuted&&this.videoElement&&!this.videoElement.muted&&(this.videoElement.muted=!0);break;case"onStopAd":if(this.reportsBlocker.onStopAd)break;this.reportsBlocker.onStopAd=!0,this.config.bus.triggerNote("APIadCompleted"),SekindoUtils.trackSekindoAdEvents("complete",null,this.params,this.config),this.videoCompleteTimeout&&clearTimeout(this.videoCompleteTimeout),this.onAdComplete(e.params);break;case"onSkipAd":if(this.reportsBlocker.onSkipAd)break;this.reportsBlocker.onSkipAd=!0,this.onAdComplete(e.params);break;case"onAdVolumeChange":0==e.val?this.params.track("mute",null,null,this.config.pixelDiv,this.config):this.params.track("unmute",null,null,this.config.pixelDiv,this.config);var d=0==e.val,h=e.val;this.config.bus.triggerNote("onVpaidEvent",{type:"volumechange",val:{muted:d,volume:h,player:"adsManager"}})}},SekindoAdUnit.prototype.onAdComplete=function(e){this.forceSkipAdTimeout&&clearTimeout(this.forceSkipAdTimeout),"complete"!=this.adProccessStatus&&(this.checkAdViewability(!1),this.disposeVideoElement(),this.disposeVpaidSlot(),this.adVideoStatus="null",this.adProccessStatus="complete",this.params.adUnit=null,this.params=null,this.config.bus.triggerNote("adCompleted"),this.parent.parent.isTriggerAdCompletedNormal?this.config.bus.triggerNote("adCompletedNormal"):(this.config.bus.triggerNote("adCompletedNextAd"),this.parent.parent.canRequset2ndPreroll=!0),this.wrapper&&this.destructWrapper(),this.config.isMuted&&this.videoElement&&(this.videoElement.muted=!0),this.parent.adUnitReport({type:"complete",val:this}))},SekindoAdUnit.prototype.onUserEvent=function(e){var t=this;if(this.parent.currAdUnit==this)switch(e.type){case"onVolumeScrabber":this.videoElement&&(this.videoElement.volume=e.value,this.videoElement.muted=!1);break;case"onMute":if(e.value){if(this.videoElement&&(this.videoElement.muted=!0),this.wrapper&&"start"==this.adVideoStatus)try{this.wrapper.setAdVolume(0)}catch(e){}this.config.isMuted=!0}else{if(this.videoElement&&(this.videoElement.muted=!1),this.wrapper&&"start"==this.adVideoStatus)try{this.wrapper.setAdVolume(.2)}catch(e){}this.config.isMuted=!1}this.params&&"start"==this.adVideoStatus&&(e.value?this.params.track("mute",null,null,this.config.pixelDiv,this.config):this.params.track("unmute",null,null,this.config.pixelDiv,this.config));break;case"skipAd":if(this.config.bus.triggerNote("APIadSkip"),this.config.isLastImpSkipped=!0,this.parent.parent.isTriggerAdCompletedNormal=!0,this.wrapper){try{this.wrapper.skipAd()}catch(e){}try{this.wrapper.stopAd()}catch(e){}this.forceSkipAdTimeout=setTimeout(function(){t.wrapper.onAdError("forceSkipAdTimeout")},1e3)}else if(this.videoElement){var i=document.createEvent("Event");i.initEvent("skipped",!0,!1),this.videoElement.dispatchEvent(i)}break;case"onPause":if(this.wrapper)try{this.wrapper.pauseAd()}catch(e){}else this.videoElement&&this.videoElement.pause;break;case"onPlay":if(this.wrapper)try{this.wrapper.resumeAd()}catch(e){}else this.videoElement&&this.videoElement.play}},SekindoAdUnit.prototype.constructProgressEvents=function(){if(this.videoElement.addEventListener("timeupdate",this.videoProgressEventCallback),0!=this.progressArray.length)for(var e=0;e<this.progressArray.length;e++){var t=this.progressArray[e].event,i=null;if(-1!=t.indexOf("%")){var n=t.substr(9);n=Number(n.substr(0,n.length-1)),i=this.videoElement.duration*n/100}else{var o=t.substr(9).split(":");i=60*Number(o[0])*60+60*Number(o[1])+Number(o[2])}this.progressArray[e].eventTime=i}},SekindoAdUnit.prototype.onVideoProgressEvent=function(e){if(this.videoElement&&this.videoElement.src==this.currSrc){Math.round(this.videoElement.duration),Math.round(this.videoElement.currentTime);for(var t=0;t<this.progressArray.length;t++)this.progressArray[t].eventTime&&this.progressArray[t].eventTime<this.videoElement.currentTime&&(this.progressArray[t].eventTime=null,this.params.track(this.progressArray[t].event,null,null,this.config.pixelDiv,this.config));this.reportProgressStatus()}},SekindoAdUnit.prototype.reportProgressStatus=function(){switch(this.progressStatus){case"inited":break;case"start":this.videoElement.currentTime>this.videoElement.duration/4&&(this.progressStatus="firstQuartile",this.params.track("firstQuartile",null,null,this.config.pixelDiv,this.config),this.config.bus.triggerNote("videoAdEvent",{type:"firstQuartile"}),this.config.bus.triggerNote("APIadFirstQuartile"));break;case"firstQuartile":this.videoElement.currentTime>this.videoElement.duration/2&&(this.progressStatus="midpoint",this.params.track("midpoint",null,null,this.config.pixelDiv,this.config),this.config.bus.triggerNote("videoAdEvent",{type:"midpoint"}),this.config.bus.triggerNote("APIadMidQuartile"));break;case"midpoint":this.videoElement.currentTime>this.videoElement.duration/4*3&&(this.progressStatus="thirdQuartile",this.params.track("thirdQuartile",null,null,this.config.pixelDiv,this.config),this.config.bus.triggerNote("videoAdEvent",{type:"thirdQuartile"}),this.config.bus.triggerNote("APIadThirdQuartile"));break;case"thirdQuartile":this.videoElement.currentTime>this.videoElement.duration&&(this.progressStatus="complete",this.config.bus.triggerNote("videoAdEvent",{type:"complete"}))}},SekindoAdUnit.prototype.destruct=function(){if(this.params&&(this.params.adUnit=null),this.removeListeners(),this.busItms)for(var e=0;e<this.busItms.length;e++)this.config.bus.removeBusItm(this.busItms[e]);this.videoCompleteTimeout&&clearTimeout(this.videoCompleteTimeout),this.wrapper&&(this.wrapper.destruct(),delete this.wrapper),this.disposeVideoElement(),this.checkAdViewability&&this.checkAdViewability(!1),this.disposeVpaidSlot(),SekindoUtils.deleteMe(this)};var VASTAds,VASTAd,VASTLinear,MAX_WRAPPER_DEPTH=5;SekindoTrackingEvents.prototype.copy=function(e){var t=Object.create(SekindoTrackingEvents.prototype);t.events={};for(var i in this.events)this.events.hasOwnProperty(i)&&(t.events[i]=[].concat(this.events[i]));return t.ad=e,t},SekindoTrackingEvents.prototype.finger=function(e){var t=new XMLHttpRequest;t.open("get",e,!0),t.send()},SekindoTrackingEvents.prototype.augment=function(e){for(var t in e.events)e.events.hasOwnProperty(t)&&(this.events[t]?this.events[t]=this.events[t].concat(e.events[t]):this.events[t]=e.events[t])},SekindoTrackingEvents.prototype.addClickTracking=function(e){var t={url:e,event:"click",offset:null};this.events.click?this.events.click.push(t):this.events.click=[t]},SekindoTrackingEvents.prototype.getEventsOfTypes=function(e){var t=[],i=e.indexOf("progress")>-1;for(var n in this.events)this.events.hasOwnProperty(n)&&(e.indexOf(n)>-1||i&&0===n.indexOf("progress-"))&&(t=t.concat(this.events[n]));return t},SekindoTrackingEvents.prototype.track=function(e,t,i,n){if(this.events[e]&&0!==this.events[e].length||"creativeView"!==!e){var o,s=[].concat(this.events[e]);for(var a in t)t.hasOwnProperty(a)&&(t["["+a+"]"]=encodeURIComponent(t[a]),delete t[a]);if("creativeView"===e)for(var r=this.ad;null!==r&&!r.hasSentImpression();){for(r.impressionSent(),o=0;o<r.impressions.length;o++)s.push({url:r.impressions[o]});r=r.parentAd}var l=[];for(o=0;o<s.length;o++){for(var c=s[o],d=!1,h=c?c.url:"",p=0;p<l.length;p++)if(h==l[p]){d=!0;break}if(!d){l.push(h);for(var u=""+parseInt(99999999*Math.random(),10);8!==u.length;)u="0"+u;t["[CACHEBUSTING]"]=u;for(a in t)t.hasOwnProperty(a)&&(h=h.replace(a,t[a]));SekindoUtils.firePixel(h,i,n,!0)}}}},SekindoVASTAds.prototype.getAd=function(e,t){var i=null;if(e&&(i=this.getAdWithSequence(1))&&!i.current().isEmpty())return i.current();this.ads||(this.ads=[]);for(var n=0;n<this.ads.length;n++)if(!this.ads[n].hasSequence())if(t){if(!this.ads[n].current().isEmpty()&&this.ads[n].currentPodAd&&this.ads[n].currentPodAd.linear&&this.ads[n].currentPodAd.linear.mediaFiles&&this.ads[n].currentPodAd.linear.mediaFiles.length)return this.ads[n].current()}else if(!this.ads[n].current().isEmpty())return this.ads[n].current()},SekindoVASTAds.prototype.getAdWithSequence=function(e){for(var t=0;t<this.ads.length;t++)if(this.ads[t].isNumber(e))return this.ads[t];return null},SekindoVASTAd.prototype.getTag=function(e,t){return this.properties.hasOwnProperty(e)?this.properties[e]:t},SekindoVASTAd.prototype.onLoaded=function(e,t){e?(this.pod=e,this.currentPodAd=e.getAd(t),this.currentPodAd.isEmpty()||(this.loaded=!0,this.onAdAvailable&&this.onAdAvailable.call(this,this))):(this.loaded=!0,this.onAdAvailable&&this.onAdAvailable.call(this,this))},SekindoVASTAd.prototype.hasSentImpression=function(){return this.sentImpression},SekindoVASTAd.prototype.impressionSent=function(){this.sentImpression=!0},SekindoVASTAd.prototype.current=function(){return this.currentPodAd},SekindoVASTAd.prototype.isNumber=function(e){return this.sequence===e},SekindoVASTAd.prototype.hasSequence=function(){return null!==this.sequence},SekindoVASTAd.prototype.isEmpty=function(){return!this.hasContent},SekindoVASTAd.prototype.hasData=function(){return this.loaded},SekindoVASTAd.prototype.getNextAd=function(){return this.vast!==this.pod&&(this.currentPodAd=this.currentPodAd.getNextAd(),null!==this.currentPod)?this.currentPodAd.current():this.hasSequence()?this.vast.getAdWithSequence(this.sequence+1).current():null},SekindoVASTAd.prototype.getLinear=function(){return this.linear},SekindoVASTAd.prototype.track=function(e,t,i,n,o){this.trackings.track(e,{CONTENTPLAYHEAD:this.timecodeToString(t),ASSETURI:i},n,o)},
SekindoVASTAd.prototype.getTrackingPoints=function(){for(var e=this.trackings?this.trackings.getEventsOfTypes(VAST_LINEAR_TRACKING_POINTS):[],t=[],i=0;i<e.length;i++){var n={event:e[i].event,offset:null};switch(e[i].event){case"start":n.offset="start";break;case"firstQuartile":n.offset="25%";break;case"midpoint":n.offset="50%";break;case"thirdQuartile":n.offset="75%";break;case"complete":n.offset="end";break;default:var o=e[i].offset;if(!o)continue;n.offset=SekindoVASTLinear.prototype.timecodeFromString(o)}t.push(n)}return t},SekindoVASTAd.prototype.timecodeToString=function(e){return("0"+parseInt(e/3600,10)+":"+("0"+parseInt(e%3600/60,10))+":"+("0"+e%60)).replace(/(^|:|\.)0(\d{2})/g,"$1$2")},SekindoVASTLinear.prototype.track=function(e,t,i,n,o){this.tracking.track(e,{CONTENTPLAYHEAD:this.timecodeToString(t),ASSETURI:i},n,o)},SekindoVASTLinear.prototype.timecodeToString=function(e){return("0"+parseInt(e/3600,10)+":"+("0"+parseInt(e%3600/60,10))+":"+("0"+e%60)).replace(/(^|:|\.)0(\d{2})/g,"$1$2")},SekindoVASTLinear.prototype.timecodeFromString=function(e){return-1===e.indexOf(":")?e:3600*parseInt(e.substr(0,2),10)+60*parseInt(e.substr(3,2),10)+parseInt(e.substr(6,2),10)},SekindoVASTLinear.prototype.getClickThrough=function(){return this.clickThrough},SekindoVASTLinear.prototype.attribute=function(e,t){if(!this.root.hasAttribute(e))return t;var i=this.root.getAttribute(e);switch(e){case"skipoffset":case"duration":case"offset":case"minSuggestedDuration":i=this.timecodeFromString(i)}return i},SekindoVASTLinear.prototype.getDuration=function(){return this.duration},SekindoVASTLinear.prototype.copy=function(e){return new SekindoVASTLinear(e,this.root)},SekindoVASTLinear.prototype.augment=function(e){this.duration=e.duration||this.duration,this.mediaFiles=e.mediaFiles.slice(0)||this.mediaFiles.slice(0),this.tracking.augment(e.tracking),this.clickThrough=e.clickThrough||this.clickThrough,this.adParameters=e.adParameters||this.adParameters},SekindoVASTLinear.prototype.getAllMedias=function(){return this.mediaFiles},SekindoVASTLinear.prototype.getBestMedia=function(e){for(var t=Number.POSITIVE_INFINITY,i=-1,n=0;n<this.mediaFiles.length;n++){var o=this.mediaFiles[n],s=Math.sqrt(Math.pow(e.width-o.width,2)+Math.pow(e.height-o.height,2));if(s<t)t=s,i=n;else if(s===t){var a=this.mediaFiles[i],r=a.bitrate||a.maxBitrate,l=o.bitrate||o.maxBitrate;l&&!r?i=n:e.bitrate&&r&&l?Math.abs(l-e.bitrate)<Math.abs(r-e.bitrate)&&(i=n):l>r&&(i=n)}}return-1===i?null:this.mediaFiles[i]};var VAST_LINEAR_TRACKING_POINTS=["start","firstQuartile","midpoint","thirdQuartile","complete","progress"];SekindoVASTLinear.prototype.getTrackingPoints=function(){for(var e=this.tracking?this.tracking.getEventsOfTypes(VAST_LINEAR_TRACKING_POINTS):[],t=[],i=0;i<e.length;i++){var n={event:e[i].event,offset:null};switch(e[i].event){case"start":n.offset="start";break;case"firstQuartile":n.offset="25%";break;case"midpoint":n.offset="50%";break;case"thirdQuartile":n.offset="75%";break;case"complete":n.offset="end";break;default:var o=e[i].offset;if(!o)continue;n.offset=SekindoVASTLinear.prototype.timecodeFromString(o)}t.push(n)}return t};var MIN_PAUSED_TIME_FOR_PREROLL=30;SekindoPlaylistManager.prototype.removeViewabilityCallback=function(){this.config.onViewabilityChange.removeCallback(this.viewabilityCallbackId)},SekindoPlaylistManager.prototype.addViewabilityCallback=function(){var e=this;this.viewabilityCallbackId=this.config.onViewabilityChange.addCallback(function(t){e.config.playerTemplateData.isPauseNonViewable&&!1===t&&e.allowPlaying&&!e.config.soundEnabledByUser?(e.pausePlayingContent(!0),e.playerSimulator.play()):(e.config.playerTemplateData.isPauseNonViewable||e.config.soundEnabledByUser)&&!0===t?(e.playerSimulator.paused||"3"==e.config.isAutoPlay||"4"==e.config.isAutoPlay||e.playerSimulator.stop(),e.allowPlaying&&e.resumePlayingContent(this.forceSimulator)):!t&&void 0!==t||"2"==e.config.isAutoPlay||"3"==e.config.isAutoPlay||"4"==e.config.isAutoPlay||(e.playerSimulator.stop(),e.allowPlaying&&e.resumePlaylist())})},SekindoPlaylistManager.prototype.fireContentPixel=function(e){if(!this.config.adIsPlaying){if(void 0===this.contentPixelFiredMap[this.index]||"contentStartPixel"==e.contentPixelName)this.contentPixelFiredMap[this.index]={};else if(void 0!==this.contentPixelFiredMap[this.index][e.contentPixelName+(e.fileId?e.fileId:"")])return;this.contentPixelFiredMap[this.index][e.contentPixelName+(e.fileId?e.fileId:"")]=!0;var t=this.config[e.contentPixelName];if(t&&SekindoUtils.validURL(t)){var i=this.config.videoWidth||this.config.width,n=this.config.videoHeight||this.config.height,o=-1!=["contentClickPixel","contentFullScreenPixel","contentPlaylistClicksPixel","contentScrubberPixel","contentVolChangePixel","contentLikePixel"].indexOf(e.contentPixelName);t=(t=(t=(t=t.replace(/&x=([0-9]+)/g,"&x="+i)).replace(/&y=([0-9]+)/g,"&y="+n)).replace(/&mediaPlayListId=0/g,"&mediaPlayListId="+(this.playListId||"0"))).replace(/&contentFileId=0/g,"&contentFileId="+(e.fileId||this.fileId||"0")),t+="&playerVer="+this.config.playerVer,t+="&contentMatchType="+this.contentMatchType,t+="&isExcludeFromOpt="+(!0===this.isFirstContent?"0":"1"),o&&this.isFirstEngagementEvent?(this.isFirstEngagementEvent=!1,this.contentPixelFiredMap[this.index]._contentEngagementUniqPixel=!0,t+="&contentEventType=player"):o&&void 0===this.contentPixelFiredMap[this.index]._contentEngagementUniqPixel&&(this.contentPixelFiredMap[this.index]._contentEngagementUniqPixel=!0,t+="&contentEventType=content"),SekindoUtils.firePixel(t,this.config.pixelDiv,this.config)}}},SekindoPlaylistManager.prototype.generateVideoElement=function(){this.videoElement=new SekindoVideoManager(this.config),this.videoElement.muted=0===parseInt(this.config.isAutoSound),this.videoElement.volume=this.config.volume,this.config.bus.triggerNote("addChild",{visual:this.videoElement,destiny:"video"}),this.addListeners(),this.playerSimulator||(this.playerSimulator=new SekindoPlayerSimulator(this.uniqueID,this.config))},SekindoPlaylistManager.prototype.loadNextContent=function(e,t){this.isFirstContent&&(this.isFirstContent=0==e),!this.contentPlayList||this.contentPlayList.length<=0||(!1!==this.config.onViewabilityChange.getCurrState()||t?(this.playerSimulator&&!this.playerSimulator.paused&&this.playerSimulator.stop(),this.allowPlaying&&(this.initNextContent(e),this.isCurrentlyPlaying=!0,this.videoElement.play(),this.config.bus.triggerNote("contentStarted",e))):this.allowPlaying&&this.playerSimulator.play())},SekindoPlaylistManager.prototype.initNextContent=function(e){this.config.videoTitle=this.videoTitle=this.contentPlayList[e].title,this.currSrc=this.contentPlayList[e],this.videoElement.src==this.currSrc&&1!=this.contentPlayList.length||(this.videoElement.src=this.currSrc),this.videoElement.videoTitle=this.contentPlayList[e].title,this.videoElement.style.display="block";var t=this.contentPlayList[e].clkUrl;if(this.fileId=this.contentPlayList[e].fileId,this.playListId=this.contentPlayList[e].playListId,this.contentMatchType=this.contentPlayList[e].contentMatch,t&&/^https?:/.test(t)?this.config.clkUrl=decodeURI(t):this.config.clkUrl=null,this.config.isNativeTemplate&&this.config.nativeTemplateElements){if(this.config.nativeTemplateElements.native_title)if(this.config.isAmpStickyAd){var i=this.contentPlayList[e].title;SekindoUtils.cropAmpTitleText(this.config,i)}else this.config.nativeTemplateElements.native_title.innerText=this.contentPlayList[e].title;if(this.config.nativeTemplateElements.native_desc&&(this.config.nativeTemplateElements.native_desc.innerText=this.contentPlayList[e].desc),this.config.nativeTemplateElements.native_vid_link)for(var n=0;n<this.config.nativeTemplateElements.native_vid_link.length;n++){var o=this.config.nativeTemplateElements.native_vid_link[n];"A"==o.tagName&&(o.href=null!=this.config.clkUrl?this.config.clkUrl:""),o.getAttribute("title")&&o.setAttribute("title",this.contentPlayList[e].title)}}this.config.currContentIndex=e,this.config.bus.triggerNote("onNextContentInited",{index:e,content:this.contentPlayList[e]}),this.config.bus.triggerNote("playlistDataUpdated",this.contentPlayList[e])},SekindoPlayerSimulator.prototype.play=function(){var e=this;this.mobileVisibilityLock||(this.paused=!1,this.currDummyTime=Date.now()-this.currDummyProgress,this.simulatePlayingInterval&&clearInterval(this.simulatePlayingInterval),this.simulatePlayingInterval=setInterval(function(){e.currDummyProgress=Date.now()-e.currDummyTime;var t=e.currDummyProgress/1e3;if(t>e.config.playerSimulatorCycleSec)return e.stop(),void e.config.bus.triggerNote("contentEnded",!0);e.config.bus.triggerNote("onVideoProgress",{currTime:t,duration:60,loaded:60,isSimulator:!0})},100))},SekindoPlayerSimulator.prototype.pause=function(){this.paused=!0,this.simulatePlayingInterval&&clearInterval(this.simulatePlayingInterval),this.simulatePlayingInterval=null},SekindoPlayerSimulator.prototype.stop=function(){this.paused=!0,this.simulatePlayingInterval&&clearInterval(this.simulatePlayingInterval),this.simulatePlayingInterval=null,this.currDummyProgress=0},SekindoPlaylistManager.prototype.loadSwitchedContentBG=function(){this.loadNextContentBG(this.config.nextContentIndex)},SekindoPlaylistManager.prototype.loadNextContentBG=function(e){var t=this;if(this.contentPlayList&&!(this.contentPlayList.length<=0)){this.bgImg&&this.bgImg.parentNode&&this.bgImg.parentNode.removeChild(this.bgImg);var i;i=this.contentPlayList[e].bgImg&&SekindoUtils.validURL(decodeURI(this.contentPlayList[e].bgImg))?this.contentPlayList[e].bgImg:this.config.absolutePath+"/content/video/splayer/assets/bigPlayBtn.jpg",this.bgImg=this.config.videoIFrameDoc.createElement("img"),this.bgImg.src=decodeURI(i);var n=this.contentPlayList[e].clkUrl;n&&/^https?:/.test(n)?this.config.clkUrl=decodeURI(n):this.config.clkUrl=null,this.bgImg.addEventListener("load",function(){!function(){var e=t.config.videoWidth||t.config.width,i=t.config.videoHeight||t.config.height;t.isImgError=!1;var n=Math.min(e/t.bgImg.width,i/t.bgImg.height);t.bgImg.style.transform="translate(-50%, -50%) scale("+n+","+n+")",t.bgImg.style.webkitTransform="translate(-50%, -50%) scale("+n+","+n+")",t.bgImg.style.position="absolute",t.bgImg.style.top="50%",t.bgImg.style.left="50%",t.bgImg.style.zIndex=3}()}),this.bgImg.addEventListener("error",function(){t.isImgError?t.bgImg.parentNode.removeChild(t.bgImg):(t.isImgError=!0,i=t.config.absolutePath+"/content/video/splayer/assets/bigPlayBtn.jpg",t.bgImg.src=decodeURI(i))}),this.config.bus.triggerNote("changeTitle",this.contentPlayList[e].title),this.bgImg.addEventListener("click",function(e){!function(e){e.stopPropagation(),"3"!=t.config.isAutoPlay&&(t.config.isPlaying=!0,t.config.bus.triggerNote("onUserEvent",{type:"onPlay"}),t.bgImg&&(t.bgImg.style.display="none"))}(e)},!0,!1),this.config.bus.triggerNote("addChild",{visual:this.bgImg,destiny:"video"}),window.primisLog("[[Playlist Manager]] - Prepare next content background")}},SekindoPlaylistManager.prototype.addListeners=function(){var e=this;this.videoEventCallback=this.onVideoEvent.bind(this),this.videoElement.addEventListener("ended",this.videoEventCallback),this.videoElement.addEventListener("play",this.videoEventCallback),this.videoElement.addEventListener("click",this.videoEventCallback),this.videoElement.addEventListener("playing",this.videoEventCallback),this.videoElement.addEventListener("pause",this.videoEventCallback),this.videoElement.addEventListener("error",this.videoEventCallback),this.videoElement.addEventListener("progress",this.videoEventCallback),this.videoElement.addEventListener("timeupdate",this.videoEventCallback),this.videoElement.addEventListener("volumechange",this.videoEventCallback),this.config.bus.addCallBack("resumePlaylist",function(t){e.resumePlaylist(t)}),this.config.bus.addCallBack("pausePlaylist",function(t){e.pausePlaylist(t)}),this.config.bus.addCallBack("prepareNextContent",function(){e.prepareNextContent(e.config.nextContentIndex)}),this.config.bus.addCallBack("stopSimulator",function(){e.playerSimulator.stop()}),this.config.bus.addCallBack("userSwitchContent",function(t){e.initNextContent(e.config.nextContentIndex),e.config.bus.triggerNote("nextContentInited",e.config.nextContentIndex),t||(e.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentPlaylistClicksPixel"}),e.config.bus.triggerNote("APIvideoSkip")),e.removeViewabilityCallback()}),this.config.bus.addCallBack("onSwitchContent",function(){e.index=e.config.nextContentIndex,e.loadNextContent(e.index),e.addViewabilityCallback()}),this.config.bus.addCallBack("onPlayerResize",function(t){e.onPlayerResize(t)}),this.config.bus.addCallBack("onUserEvent",function(t){e.onUserEvent(t)})},SekindoPlaylistManager.prototype.onPlayerResize=function(e){var t=e.videoWidth||e.width,i=e.videoHeight||e.height;if(this.bgImg){var n=Math.min(t/this.bgImg.width,i/this.bgImg.height);this.bgImg.style.transform="translate(-50%, -50%) scale("+n+","+n+")",this.bgImg.style.webkitTransform="translate(-50%, -50%) scale("+n+","+n+")"}},SekindoPlaylistManager.prototype.onTimeScrabber=function(e){window.primisLog("[[Playlist Manager]] - onTimeScrabber"),"block"==this.videoElement.style.display&&(this.videoElement.currentTime=e*this.videoElement.duration)},SekindoPlaylistManager.prototype.onVideoLike=function(){1!=this.contentPlayList[this.config.currContentIndex].isLiked&&(this.contentPlayList[this.config.currContentIndex].isLiked=1,this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentLikePixel"}),this.config.bus.triggerNote("playlistDataUpdated",this.contentPlayList[this.config.currContentIndex]))},SekindoPlaylistManager.prototype.pausePlaylist=function(e){this.allowPlaying=!1,e||this.playerSimulator&&!this.playerSimulator.paused?this.playerSimulator.pause():this.pausePlayingContent()},SekindoPlaylistManager.prototype.prepareNextContent=function(e){!this.playerSimulator||this.playerSimulator.paused?(this.pausePlayingContent(),this.initNextContent(e)):this.playerSimulator.pause()},SekindoPlaylistManager.prototype.pausePlayingContent=function(e){this.videoElement&&this.videoElement.src&&3!=this.videoElement.networkState&&!this.videoElement.paused&&(e&&(this.pausedOnNonView=!0),window.primisLog("[[Playlist Manager]] - pausePlayingContent"),this.videoElement.pause()),this.bgImg&&(this.bgImg.style.display="none")},SekindoPlaylistManager.prototype.resumePlaylist=function(e){window.primisLog("[[Playlist Manager]]- resumePlaylist"),e||(e={}),this.config.isFirstViewablePreroll&&this.config.isRealPrerollEnabled&&(e.forceSimulator=!0),e.forceSimulator||(this.allowPlaying=!0),this.config.isPlaying&&!this.mobileVisibilityLock&&(e.forceSimulator||this.playerSimulator&&this.playerSimulator.paused&&(this.config.playerTemplateData.isPauseNonViewable?!1===this.config.onViewabilityChange.getCurrState()&&!this.config.soundEnabledByUser:this.playerSimulator.currDummyProgress>0)?this.playerSimulator.play():this.resumePlayingContent(e.userClick))},SekindoPlaylistManager.prototype.resumePlayingContent=function(e){if(!this.config.playerTemplateData.isPauseNonViewable||!1!==this.config.onViewabilityChange.getCurrState()||this.config.soundEnabledByUser){this.allowPlaying=!0,this.isCurrentlyPlaying&&this.videoElement.src&&3!=this.videoElement.networkState?(window.primisLog("[[Playlist Manager]]- resumePlayingContent"),this.videoElement.play()):this.loadNextContent(this.index,e),this.videoElement.style.display="block",this.videoElement.videoTitle=this.videoTitle,this.config.bus.triggerNote("changeTitle",this.videoTitle),this.bgImg&&(this.bgImg.style.display="none"),window.primisLog("[[Playlist Manager]] - start playing content")}},SekindoPlaylistManager.prototype.onVideoEvent=function(e){var t=this;switch("progress"!=e.type&&"timeupdate"!=e.type&&window.primisLog("[[Playlist Manager]] - onVideoEvent - "+e.type),e.type){case"error":if(this.currFileId=null,this.index++,this.isCurrentlyPlaying=!1,this.index>=this.contentPlayList.length){this.playlistMultiplierIndex++,this.playlistMultiplierIndex>=this.config.playlistMultiplier&&(this.playlistMultiplierIndex=0),this.index=0,this.fileId=this.contentPlayList[0]?this.contentPlayList[0].fileId:"0",this.onErrorTimeout=setTimeout(function(){t.loadNextContent(t.index)},3e3);break}this.loadNextContent(this.index);break;case"play":window.primisLog("[[Playlist Manager]][[Hls]] - Current Src Type is - "+SekindoUtils.getVidFileType(this.videoElement.currentSrc)),this.bgImg&&(this.bgImg.style.display="none"),this.videoElement.src==this.currSrc&&this.config.bus.triggerNote("changeTitle",this.videoTitle),this.config.bus.triggerNote("onVideoEvent",{type:"play",val:{player:"playlistManager"}});case"volumechange":var i=!this.videoElement||this.videoElement.muted,n=this.videoElement?this.videoElement.volume:-1;t.config.bus.triggerNote("onVideoEvent",{type:"volumechange",val:{muted:i,volume:n,player:"playlistManager"}}),(!i&&t.prevVolVal!==n||i&&0!==t.prevVolVal)&&(t.prevVolVal=i?0:n,t.config.bus.triggerNote("APIvolumeChange",t.prevVolVal));break;case"progress":case"timeupdate":try{this.config.bus.triggerNote("APIvideoTimeUpdate",this.videoElement.currentTime),this.config.bus.triggerNote("onVideoProgress",{currTime:this.videoElement.currentTime,duration:this.videoElement.duration,loaded:this.videoElement.buffered.end(this.videoElement.buffered.length-1),player:"playlistManager"})}catch(e){}this.videoElement.currentTime>=30&&this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentCompletePixel"});break;case"pause":this.config.isContentPlaying=!1,this.pausedOnNonView||this.config.bus.triggerNote("onVideoEvent",{type:"pause",val:{player:"playlistManager"}}),this.pausedOnNonView=!1;break;case"playing":if(this.config.isContentPlaying=!0,this.currFileId!=this.fileId){this.currFileId=this.fileId,this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentStartPixel"});var o=SekindoUtils.getApiObjectForEvent("videoStart");this.contentPlayList[this.config.currContentIndex]&&(o.title=this.contentPlayList[this.config.currContentIndex].title,o.duration=this.contentPlayList[this.config.currContentIndex].duration),this.config.bus.triggerNote("APIvideoStart",o),window.primisLog("[[Content Pixel]] - 16. start playing content")}this.config.bus.triggerNote("changeTitle",this.videoTitle),this.config.bus.triggerNote("onVideoEvent",{type:"playing",val:{player:"playlistManager"}});break;case"ended":this.currFileId=null,this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentCompletePixel"}),this.config.bus.triggerNote("fireContentPixel",{contentPixelName:"contentFullCompletePixel"}),this.isCurrentlyPlaying=!1,this.index++,this.index>=this.contentPlayList.length&&(this.playlistMultiplierIndex++,this.playlistMultiplierIndex>=this.config.playlistMultiplier&&(this.playlistMultiplierIndex=0),this.index=0),this.fileId=this.contentPlayList[this.index]?this.contentPlayList[this.index].fileId:"0",0==this.index&&0==this.playlistMultiplierIndex?(this.videoElement.style.display="none",this.allowPlaying=!1,this.config.bus.triggerNote("playlistEnded",!0)):(this.videoElement.style.display="none",this.config.bus.triggerNote("contentEnded",{player:"playlistManager"})),this.config.bus.triggerNote("APIvideoEnd")}},SekindoPlaylistManager.prototype.onUserEvent=function(e){switch(e.type){case"onVolumeScrabber":this.videoElement.volume=e.value,this.videoElement.muted=!1,this.config.isMuted=!1,this.config.volume=e.value;break;case"onMute":e.value?(this.videoElement.muted=!0,this.config.isMuted=!0):(this.videoElement.muted=!1,this.config.isMuted=!1);break;case"timeScrabber":this.onTimeScrabber(e.value);break;case"onVideoLike":this.onVideoLike();break;case"skipProgress":this.onSkipProgress(e.value)}},SekindoPlaylistManager.prototype.onSkipProgress=function(e){window.primisLog("[[Playlist Manager]] - onSkipProgress"),"block"==this.videoElement.style.display&&(this.videoElement.currentTime+=e)},SekindoPlaylistManager.prototype.destruct=function(){clearInterval(this.viwabilityInterval),clearInterval(this.jsActivityInterval),clearTimeout(this.onErrorTimeout),this.videoElement.removeEventListener("ended",this.videoEventCallback),this.videoElement.removeEventListener("play",this.videoEventCallback),this.videoElement.removeEventListener("click",this.videoEventCallback),this.videoElement.removeEventListener("playing",this.videoEventCallback),this.videoElement.removeEventListener("pause",this.videoEventCallback),this.videoElement.removeEventListener("error",this.videoEventCallback),this.videoElement.removeEventListener("progress",this.videoEventCallback),this.videoElement.removeEventListener("timeupdate",this.videoEventCallback),this.videoElement.removeEventListener("volumechange",this.videoEventCallback),this.iosVidWrapper&&this.iosVidWrapper.destruct(),delete this.videoElement},SekindoVPAIDWrapper=function(e,t,i){function n(){return!0}function o(){s.VPAIDCreative=l.getVPAIDAd,s.creative=s.VPAIDCreative();var e={};if(e.AdParameters=s.params.creativeData,s.params.creativeData=e,s.checkVPAIDInterface(s.creative)){s.setCallbacksForCreative(),s.config.blacklistIframe&&s.config.blacklistIframe.length&&(s.amazoneAdCheckInterval=setInterval(function(){for(var e=SekindoUtils.getElementsInObj(s.config.videoIFrame,["iframe"]),t=0;t<e.length;t++){for(var i=e[t],n=!1,o=0;o<s.config.blacklistIframe.length;o++)if(-1!=i.src.indexOf(s.config.blacklistIframe[o])){n=!0;break}if(i.src&&n)return clearInterval(s.amazoneAdCheckInterval),i.parentNode.removeChild(i),void s.onAdError("amazoneAd")}},100)),s.config.blockVpaidjsYahoo&&(s.yahooAdCheckInterval=setInterval(function(){for(var e=SekindoUtils.getElementsInObj(s.config.videoIFrame,["script"]),t=0;t<e.length;t++){var i=e[t];if(i.src&&-1!=i.src.indexOf("vista.js"))return clearInterval(s.yahooAdCheckInterval),i.parentNode.removeChild(i),void s.onAdError("amazoneAd")}},100));var t=s.config.videoWidth||s.config.width,i=s.config.adVideoHeight||s.config.height;s.initAd(t,i,"normal",766,s.params.creativeData,s.params.environmentVars)}else s.onAdError("vpaidInterfaceNotConformed")}var s=this;this.config=e,this.params=t,this.parent=i,this.uniqueID=this.config.uniqueID,this.doNotUseSetAdVolume=!1,this.killTimeOut&&clearTimeout(this.killTimeOut),this.params.killTime&&this.params.killTime>0&&(this.killTimeOut=setTimeout(function(){s.onAdError("killTimeOut")},this.params.killTime));var a=s.config.videoWidth||s.config.width,r=s.config.adVideoHeight||s.config.height;this.iframe=this.config.videoIFrameDoc.createElement("iframe"),this.iframe.style.border="none",this.iframe.frameborder="0",this.iframe.allowtransparency="true",this.iframe.hspace="0",this.iframe.vspace="0",this.iframe.style.margin="0px",this.iframe.scrolling="no",this.iframe.style.position="absolute",this.iframe.style.top="0px",this.iframe.style.left="0px",this.iframe.style.width=a+"px",this.iframe.style.height=r+"px",this.iframe.id="sekindoVpaidIframe",this.VPAIDCreative=null,this.params.environmentVars.slot.appendChild(this.iframe);var l=this.iframe.contentWindow||this.iframe.contentDocument.defaultView;this.iFrameDoc=l.document||this.iframe.contentDocument,this.iFrameDoc.open(),this.iFrameDoc.close();var c=this.iFrameDoc.createElement("base");c.href=this.config.dummyBaseHref,this.iFrameDoc.head.appendChild(c),l.Element.prototype.scrollIntoView=function(){};var d=this.iFrameDoc.createElement("div");this.iFrameDoc.body.appendChild(d),this.iFrameDoc.body.style.margin="0px",this.params.environmentVars.slot=d,l.onerror=n,l.console&&(l.console.error=n),this.readyStateCheckInterval&&clearInterval(this.readyStateCheckInterval),this.readyStateCheckInterval=setInterval(function(){"complete"===s.iFrameDoc.readyState&&(clearInterval(s.readyStateCheckInterval),function(){var e=s.iFrameDoc.getElementsByTagName("head")[0];s.script=s.iFrameDoc.createElement("script"),s.script.type="text/javascript",s.script.src=s.params.VPAIDUrl,s.script.onload=o,s.script.onreadystatechange=function(){"complete"==s.readyState&&o()},e.appendChild(s.script)}())},10)},SekindoVPAIDWrapper.prototype.checkVPAIDInterface=function(e){return!!(e&&e.initAd&&"function"==typeof e.initAd&&e.startAd&&"function"==typeof e.startAd&&e.stopAd&&"function"==typeof e.stopAd&&e.skipAd&&"function"==typeof e.skipAd&&e.resizeAd&&"function"==typeof e.resizeAd&&e.pauseAd&&"function"==typeof e.pauseAd&&e.resumeAd&&"function"==typeof e.resumeAd&&e.expandAd&&"function"==typeof e.expandAd&&e.collapseAd&&"function"==typeof e.collapseAd&&e.subscribe&&"function"==typeof e.subscribe&&e.unsubscribe&&"function"==typeof e.unsubscribe)},SekindoVPAIDWrapper.prototype.setCallbacksForCreative=function(){var e={AdStarted:this.onStartAd,AdStopped:this.onStopAd,AdSkipped:this.onSkipAd,AdLoaded:this.onAdLoaded,AdLinearChange:this.onAdLinearChange,AdSizeChange:this.onAdSizeChange,AdExpandedChange:this.onAdExpandedChange,AdSkippableStateChange:this.onAdSkippableStateChange,AdDurationChange:this.onAdDurationChange,AdRemainingTimeChange:this.onAdRemainingTimeChange,AdVolumeChange:this.onAdVolumeChange,AdImpression:this.onAdImpression,AdClickThru:this.onAdClickThru,AdInteraction:this.onAdInteraction,AdVideoStart:this.onAdVideoStart,AdVideoFirstQuartile:this.onAdVideoFirstQuartile,AdVideoMidpoint:this.onAdVideoMidpoint,AdVideoThirdQuartile:this.onAdVideoThirdQuartile,AdVideoComplete:this.onAdVideoComplete,AdUserAcceptInvitation:this.onAdUserAcceptInvitation,AdUserMinimize:this.onAdUserMinimize,AdUserClose:this.onAdUserClose,AdPaused:this.onAdPaused,AdPlaying:this.onAdPlaying,AdError:this.onAdError,AdLog:this.onAdLog};for(var t in e)this.creative.subscribe(e[t],String(t),this)},SekindoVPAIDWrapper.prototype.objSoundMonitor=function(e,t,i){var n=0,o=this;this.config=i,this.mediaObj=e,t.forceMute&&o.config.isMuted&&!o.config.isRolloverUnMuted&&(e.muted=!0),e.onvolumechange=function(){t.forceMute&&o.config.isMuted&&!o.config.isRolloverUnMuted&&(e.muted||(e.muted=!0,++n>3&&t.onStragle(e)))}},SekindoVPAIDWrapper.prototype.soundsController=function(e){function t(){for(var t=0;t<e.length;t++)for(var i=SekindoUtils.getElementsInObj(e[t],["video","audio"]),a=0;a<i.length;a++){for(var r=!0,l=0;l<s.length;l++)s[l].mediaObj==i[a]&&(r=!1);if(r){var c=new n.objSoundMonitor(i[a],o,n.config);s.push(c)}}}function i(){clearInterval(n.vidCollectInterval);for(var e in s){var t=s[e];t.mediaObj&&(t.mediaObj.onvolumechange=null),t=null}s=null,o=null}var n=this;if(e){var o={},s=[];o.forceMute=!0,o.onStragle=function(e){i(),n.onAdError("soundStragle")},t(),this.vidCollectInterval=setInterval(t,100)}else i()},SekindoVPAIDWrapper.prototype.initAd=function(e,t,i,n,o,s){if(this.params.properties.AdTitle&&-1!=this.params.properties.AdTitle.indexOf("EyeView")&&(this.doNotUseSetAdVolume=!0),this.config.isMuteControlled){var a=[this.config.videoIFrame];this.iframe&&a.push(this.iframe),this.soundsController(a)}s.videoSlotCanAutoPlay=!0,this.creative.initAd(e,t,i,n,o,s)},SekindoVPAIDWrapper.prototype.onAdPaused=function(){this.parent&&this.parent.onVpaidEvent("onAdPaused")},SekindoVPAIDWrapper.prototype.onAdPlaying=function(){this.parent&&this.parent.onVpaidEvent("onAdPlaying")},SekindoVPAIDWrapper.prototype.onAdError=function(e){try{if(-1!=e.indexOf("Event:AdImpression"))return}catch(e){}this.parent&&this.parent.onVpaidEvent({type:"onAdError"})},SekindoVPAIDWrapper.prototype.onAdLog=function(e){},SekindoVPAIDWrapper.prototype.onAdUserAcceptInvitation=function(){this.parent&&this.parent.onVpaidEvent("onAdUserAcceptInvitation")},SekindoVPAIDWrapper.prototype.onAdUserMinimize=function(){this.parent&&this.parent.onVpaidEvent("onAdUserMinimize")},SekindoVPAIDWrapper.prototype.onAdUserClose=function(){this.parent&&this.parent.onVpaidEvent({type:"onAdUserClose"})},SekindoVPAIDWrapper.prototype.onAdSkippableStateChange=function(){this.parent&&this.parent.onVpaidEvent({type:"onAdSkippableStateChange",val:this.creative.getAdSkippableState()})},SekindoVPAIDWrapper.prototype.onAdExpandedChange=function(){this.parent&&this.parent.onVpaidEvent({type:"onAdExpandedChange",val:this.creative.getAdExpanded()})},SekindoVPAIDWrapper.prototype.getAdExpanded=function(){return this.creative.getAdExpanded()},SekindoVPAIDWrapper.prototype.getAdSkippableState=function(){return this.creative.getAdSkippableState()},SekindoVPAIDWrapper.prototype.onAdSizeChange=function(){this.parent&&this.parent.onVpaidEvent({type:"onAdSizeChange",width:this.creative.getAdWidth(),height:this.creative.getAdHeight()})},SekindoVPAIDWrapper.prototype.onAdDurationChange=function(){this.parent&&this.parent.onVpaidEvent({type:"onAdDurationChange",val:this.creative.getAdDuration()})},SekindoVPAIDWrapper.prototype.onAdRemainingTimeChange=function(){this.parent&&this.parent.onVpaidEvent({type:"onAdRemainingTimeChange",val:this.creative.getAdRemainingTime()})},SekindoVPAIDWrapper.prototype.getAdRemainingTime=function(){return this.creative.getAdRemainingTime()},SekindoVPAIDWrapper.prototype.onAdImpression=function(e){var t=this;clearTimeout(this.killTimeOut),this.amazoneRemovalId=setTimeout(function(){t.amazoneAdCheckInterval&&clearInterval(t.amazoneAdCheckInterval)},1e3),window.primisLog("[[VPAID Wrapper]] - onAdImpression"),this.hadImpression=!0,this.vidCollectInterval&&clearInterval(this.vidCollectInterval),this.parent&&this.parent.onVpaidEvent({type:"onAdImpression",macro:e}),this.impressionTimer&&clearTimeout(this.impressionTimer),this.config.impressionTimeout&&this.config.impressionTimeout>0&&(this.impressionTimer=setTimeout(function(){t.onAdError("impressionTimer")},this.config.impressionTimeout)),this.params.reportDebugImpPixelId&&this.params.debugWFManagerId&&this.config.LogRest.performCall("liveVideoWaterfall","SetVastStatus",[this.params.reportDebugImpPixelId,"Impression (from VPAID)"],this.params.debugWFManagerId)},SekindoVPAIDWrapper.prototype.onAdClickThru=function(e,t,i){this.parent&&this.parent.onVpaidEvent("onAdClickThru")},SekindoVPAIDWrapper.prototype.onAdInteraction=function(e){this.parent&&this.parent.onVpaidEvent("onAdInteraction")},SekindoVPAIDWrapper.prototype.onAdVideoStart=function(){var e=this;this.parent&&this.parent.onVpaidEvent("onAdVideoStart"),this.params.environmentVars.videoSlot.paused&&setTimeout(function(){var t=e.params.environmentVars.videoSlot.play();if(t)try{t.then(function(){}).catch(function(e){})}catch(e){}},200)},SekindoVPAIDWrapper.prototype.onAdVideoFirstQuartile=function(){this.parent&&this.parent.onVpaidEvent("onAdVideoFirstQuartile")},SekindoVPAIDWrapper.prototype.onAdVideoMidpoint=function(){this.parent&&this.parent.onVpaidEvent("onAdVideoMidpoint")},SekindoVPAIDWrapper.prototype.onAdVideoThirdQuartile=function(){this.parent&&this.parent.onVpaidEvent("onAdVideoThirdQuartile")},SekindoVPAIDWrapper.prototype.onAdVideoComplete=function(){this.parent&&this.parent.onVpaidEvent({type:"onAdVideoComplete"})},SekindoVPAIDWrapper.prototype.onAdLinearChange=function(){this.parent&&this.parent.onVpaidEvent("onAdLinearChange")},SekindoVPAIDWrapper.prototype.getAdLinear=function(){return this.creative.getAdLinear()},SekindoVPAIDWrapper.prototype.startAd=function(){this.creative.startAd()},SekindoVPAIDWrapper.prototype.onAdLoaded=function(){this.parent&&this.parent.onVpaidEvent("onAdLoaded")},SekindoVPAIDWrapper.prototype.onStartAd=function(){this.parent&&this.parent.onVpaidEvent("onStartAd")},SekindoVPAIDWrapper.prototype.stopAd=function(){this.creative.stopAd()},SekindoVPAIDWrapper.prototype.onStopAd=function(e){var t=this;this.hadImpression?(window.primisLog("[[VPAID Wrapper]] - onStopAd"),this.onStopTimeout=setTimeout(function(e){t.parent&&t.parent.onVpaidEvent({type:"onStopAd"})},2)):this.onAdError()},SekindoVPAIDWrapper.prototype.onSkipAd=function(e){this.parent&&this.parent.onVpaidEvent({type:"onSkipAd"})},SekindoVPAIDWrapper.prototype.setAdVolume=function(e){if(!this.doNotUseSetAdVolume)try{this.creative.setAdVolume(e)}catch(e){}},SekindoVPAIDWrapper.prototype.getAdVolume=function(){return this.creative.getAdVolume()},SekindoVPAIDWrapper.prototype.onAdVolumeChange=function(){this.hadImpression&&this.parent&&this.parent.onVpaidEvent({type:"onAdVolumeChange",val:this.creative.getAdVolume()})},SekindoVPAIDWrapper.prototype.resizeAd=function(e,t,i){this.iframe.style.width=e+"px",this.iframe.style.height=t+"px",this.creative&&this.creative.resizeAd(e,t,i)},SekindoVPAIDWrapper.prototype.pauseAd=function(){this.creative.pauseAd()},SekindoVPAIDWrapper.prototype.resumeAd=function(){this.creative.resumeAd()},SekindoVPAIDWrapper.prototype.expandAd=function(){this.creative.expandAd()},SekindoVPAIDWrapper.prototype.collapseAd=function(){this.creative.collapseAd()},SekindoVPAIDWrapper.prototype.destruct=function(e){this.soundsController(),this.killTimeOut&&clearTimeout(this.killTimeOut),
this.impressionTimer&&clearTimeout(this.impressionTimer),this.onStopTimeout&&clearTimeout(this.onStopTimeout),this.amazoneAdCheckInterval&&clearInterval(this.amazoneAdCheckInterval),this.amazoneRemovalId&&clearTimeout(this.amazoneRemovalId),this.yahooAdCheckInterval&&clearInterval(this.yahooAdCheckInterval),this.readyStateCheckInterval&&clearInterval(this.readyStateCheckInterval);var t=document.getElementById("sekindoVpaidIframe");t&&t.parentNode&&t.parentNode.removeChild(t),e||SekindoUtils.deleteMe(this)},SekindoDebugAgent.prototype.setDebugConfigFromWindow=function(){var e=this,t=SekindoUtils.getTopWindow(window);try{var i=t.location.href.toLowerCase();if(-1!=i.indexOf("sekindodebugger")&&(this.isDebuggerWindow=!0,-1!=i.indexOf("sekindodebuggerin")&&(this.isDebuggerWindowIn=!0),window.primisLog=function(t){e.earlyMessagesQ.push(t)},setTimeout(function(){for(var t=0;t<e.earlyMessagesQ.length;t+=1)window.primisLog(e.earlyMessagesQ[t]);e.earlyMessagesQ=[]},5e3)),t&&t.sekindoConfigDebug){this.configDebug=t.sekindoConfigDebug;for(var n in this.configDebug)if(-1!==n.indexOf(".")){var o=n.substring(0,n.indexOf(".")),s=n.substring(n.indexOf(".")+1,n.length);""!==this.configDebug[n]&&(this.config[o][s]=this.configDebug[n])}else""!==this.configDebug[n]&&(this.config[n]=this.configDebug[n])}}catch(e){}},SekindoDebugAgent.prototype.isActivateDebugWindow=function(){return(this.isDebuggerWindow||1==this.config.debug)&&!this.isDebuggerWindowConstructed},SekindoDebugAgent.prototype.activateDebugWindow=function(){try{this.isDebuggerWindowConstructed=!0;var e=this.isDebuggerWindowIn?null:window.open(this.config.absolutePath+this.externalDebugWindowURL);if(e)window.primisLog=function(t){try{e.sendToDebugWindow(t)}catch(n){try{arguments.callee.caller.err=new Error("error");var i;try{i=arguments.callee.caller.err.stack.toString()}catch(e){i=e.stack.toString()}e.postMessage({val:t,stack:i},"*")}catch(e){}}};else{var t=window.top.document;window.top.absolutePath=this.config.absolutePath;var i=t.createElement("script");i.language="javascript",i.type="text/javascript",i.src=this.config.absolutePath+this.internalDebugWindowURL,i.onload=function(){window.primisLog=function(e,t){try{window.top.sendToDebugWindow(e,t)}catch(e){}},window.onerror=window.top.onerror},t.body.appendChild(i)}}catch(e){}},SekindoUtils.applyExternalRules=function(e,t,i){function n(e,t){for(var i in t)"object"==typeof a.style[i]&&a.style[i].hasOwnProperty("value")&&a.style[i].hasOwnProperty("priority")?e.style.setProperty(i,a.style[i].value,a.style[i].priority):e.style[i]=a.style[i]}if(e.externRules.length)for(var o=e.externRules,s=0;s<o.length;s++){var a=o[s];if(("init"!=i||!a.dest)&&("init"==i||a.dest&&a.dest===i))if("number"==typeof a.element&&"style"==t){for(var r=e.playerIframeWindow.frameElement,l=0;l<a.element;l++)r=r.parentNode;n(r,a.style)}else if("config"!=a.element||"config"!=t&&"function"!=t){if("object"==typeof a.element&&"style"==t){r=null;var c=window.parent.document;if(a.element.hasOwnProperty("id"))r=c.getElementById(a.element.id);else if(a.element.hasOwnProperty("class")){var d=a.element.hasOwnProperty("num")?a.element.num:0;r=c.getElementsByClassName(a.element.class)[d]}null!=r&&n(r,a.style)}}else for(var h in a.params)e[h]=a.params[h]}},SekindoUtils.getApiObjectForEvent=function(e){switch(e){case"adStarted":return{impValue:0,servingFee:0};case"videoStart":return{title:void 0,duration:void 0};default:return{}}},SekindoUtils.verificationAndSyncPixels=function(e,t,n){function o(e){(new Image).src=e}function s(e){var t=document.createElement("script");t.setAttribute("type","text/javascript"),t.setAttribute("src",e),t.setAttribute("async",!0);var i=document.getElementsByTagName("head");try{i.length&&(i=i[0]).insertBefore(t,null)}catch(e){}}function a(e){var i=Math.random().toString(16).substr(2),n="<iframe ".concat('sandbox="allow-scripts allow-same-origin"',' id="').concat(i,'"\n      frameborder="0"\n      allowtransparency="true"\n      marginheight="0" marginwidth="0"\n      width="0" hspace="0" vspace="0" height="0"\n      style="height:0px;width:0px;display:none;"\n      scrolling="no"\n      src="').concat(e,'">\n    </iframe>'),o=document.createElement("div");o.innerHTML=n;try{t.appendChild(o)}catch(e){}}for(i=0;i<e.length;i++){var r=e[i].pixel;r=(r=(r=r.replace(/\${GDPR}/g,n.gdprIsRequired)).replace(/\${GDPR_CONSENT}/g,encodeURIComponent(n.gdprInfo.getConsentString()))).replace(/\${US_PRIVACY}/g,encodeURIComponent(n.ccpaInfo.consent)),"img"==e[i].type?o(r):"js"==e[i].type?s(r):"iframe"==e[i].type&&a(r)}},SekindoUtils.scriptOptimizer=function(){window.console||(Window.prototype.console={},Window.prototype.console.error=function(e){},Window.prototype.console.info=function(e){},Window.prototype.console.log=function(e){},Window.prototype.console.warn=function(e){}),Element.prototype.scrollIntoView=function(){},navigator.geolocation.getCurrentPosition=function(e,t){t({code:0})},navigator.geolocation.watchPosition=function(e,t){t({code:0})},function(){for(var e=0,t=["webkit","moz"],i=0;i<t.length&&!window.requestAnimationFrame;++i)window.requestAnimationFrame=window[t[i]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[t[i]+"CancelAnimationFrame"]||window[t[i]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(t,i){var n=(new Date).getTime(),o=Math.max(0,16-(n-e)),s=window.setTimeout(function(){t(n+o)},o);return e=n+o,s}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(e){clearTimeout(e)})}()},SekindoUtils.trackSekindoAdEvents=function(e,t,i,n){var o=i;if(o&&o.trackingEvents){o.macro&&(t=o.macro);var s=o.trackingEvents[e];if(s){"string"==typeof s&&(s=[s]);for(var a=0;a<s.length;a++){var r=s[a];if(t&&(r=r.replace(t.str,t.repTo)),r+="&playerVer="+n.playerVer,"impression"==e){var l=SekindoUtils.getPlayerViewPct(n.playerIframeElement,window.parent);r=(r=r.replace(/&contentFileId=0/g,"&contentFileId="+(n.bus.getParam("fileId")||"0"))).replace(/&mediaPlayListId=0/g,"&mediaPlayListId="+(n.bus.getParam("playListId")||"0")),r+="&isExcludeFromOpt="+(!0===n.bus.getParam("isFirstContent")?"0":"1"),r+="&isCachedBid="+(i.isCachedBid?"1":"0"),r+="&contentMatchType="+n.bus.getParam("contentMatchType"),r+="&viewPct="+JSON.stringify(l)}if("viewable"==e){l=SekindoUtils.getPlayerViewPct(n.playerIframeElement,window.parent);r+="&viewPct="+JSON.stringify(l)}if("onAttempt"==e){if(!(Math.random()*n.attemptMultiplier<1))continue;r=r.replace("${ATTEMPT_MULTIPLIER}",n.attemptMultiplier)}"response"==e&&i.hasOwnProperty("rvn")&&(r=r.replace("${VP_RVN_MACRO}",i.rvn)),"complete"==e&&(r+="&isCurrentlyViewable="+(n.onViewabilityChange.getCurrState()?1:0)),SekindoUtils.firePixel(r,n.pixelDiv,n)}}}},SekindoUtils.adInspection=function(e,t,i,n,o){return function(){if(t.isJsVpaid)return!0;var n=e.adFormat;switch(i){case"pre_roll":if(!n.pre_roll)return!1;break;case"mid_roll":case"gap":if(!n.mid_roll)return!1}return!0}()&&!(-1!=e.maxImpressions&&e.impressionCount.val>=e.maxImpressions)&&function(){var t=e.adFormat;return!(t.once_roll&&o>t.once_roll)}()},SekindoUtils.getViewportSize=function(e){if(null!=(e=e||window).innerWidth)return{w:e.innerWidth,h:e.innerHeight};var t=e.document;return"CSS1Compat"==document.compatMode?{w:t.documentElement.clientWidth,h:t.documentElement.clientHeight}:{w:t.body.clientWidth,h:t.body.clientWidth}},SekindoUtils.isIvtHidden=function(e,t,i,n){function o(e,t){var n=!1,s=function(e){var o=0,s="iFrame";for(void 0!==e.id&&(s=e.id);e;){var a="",r="";if(e.style){var l=t.getComputedStyle(e);void 0!==e.id?a=e.id:void 0!==e.className&&(r=e.className);var c=e.tagName;if(l){if("0"==l.opacity)return"opacity&ivtElmt="+o+"&ivtBaseElmt="+s+"&ivtElmtId="+a+"&ivtElmtCls="+r+"&ivtElmtTag="+c;if("none"==l.display)return"display&ivtElmt="+o+"&ivtBaseElmt="+s+"&ivtElmtId="+a+"&ivtElmtCls="+r+"&ivtElmtTag="+c;if(!n&&"ios"!=i.os&&l.visibility&&(n=!0,"hidden"==l.visibility))return"visibility&ivtElmt="+o+"&ivtBaseElmt="+s+"&ivtElmtId="+a+"&ivtElmtCls="+r+"&ivtElmtTag="+c}}e=e.parentNode,o++}return"ok"}(e);if("ok"!=s)return s;try{if(t.parent!=t&&"ok"!=(s=o(t.frameElement,t.parent)))return s;var a=e.getBoundingClientRect(),r=SekindoUtils.getViewportSize(t);if(a.right<0||a.left>r.w)return"bounds"}catch(e){}return"ok"}return n?"ok":(t=t||window,o(e,t))},SekindoUtils.posObjArray=[],SekindoUtils.disablePositions=function(e,t){if(t){SekindoUtils.posObjArray=[];function i(e,t){!function(e){for(;e;){if(e.style){var i=t.getComputedStyle(e);i&&i.position&&"static"!=i.position&&(SekindoUtils.posObjArray.push({obj:e,pos:i.position}),e.style.position="static")}e=e.parentNode}}(e),t!=t.top&&i(t.frameElement,t.parent)}var n=e.ownerDocument;i(e,n.defaultView||n.parentWindow)}else setTimeout(function(){for(var e=0;e<SekindoUtils.posObjArray.length;e++)SekindoUtils.posObjArray[e].obj.style.position=SekindoUtils.posObjArray[e].pos},1)},SekindoUtils.getElementViewPct=function(e,t){if(window.isAmpProject)return{w:Number(window.ampView),h:+Number(window.ampView)};try{if("visible"!=(t.document.visibilityState||t.document.webkitVisibilityState||t.document.mozVisibilityState||t.document.msVisibilityState))return{w:0,h:0};var i=e.getBoundingClientRect(),n=i.height||i.bottom-i.top,o=i.width||i.right-i.left,s=SekindoUtils.getViewportSize(t),a=s.h-i.bottom,r=s.w-i.right,l=n+Math.min(0,i.top)+Math.min(0,a),c=Math.max(0,l/n),d=o+Math.min(0,i.left)+Math.min(0,r);return{w:Math.max(0,d/o),h:c}}catch(e){return{w:0,h:0}}},SekindoUtils.getPlayerViewPct=function(e,t){if(window.isAmpProject)return{w:Number(window.ampView),h:+Number(window.ampView)};try{if("visible"!=(t.document.visibilityState||t.document.webkitVisibilityState||t.document.mozVisibilityState||t.document.msVisibilityState))return{w:0,h:0};var i=e.getBoundingClientRect(),n=i.height||i.bottom-i.top,o=SekindoUtils.getViewportSize(t),s=o.h-i.top;i.top<0&&(s=n+i.top);var a=100;(i.right<0||i.left>o.w)&&(a=0);return{w:a,h:Math.min(100,Math.max(0,s)/n*100)}}catch(e){return{w:0,h:0}}},SekindoUtils.isElementInViewPort=function(e,t,i,n){function o(e,t){var i=!1;if(s.push(t),!1===function(e){for(;e;){if(e.hidden)return!1;if(e.style){var n=t.getComputedStyle(e);if(n){if("0"==n.opacity)return!1;if("none"==n.display)return!1;if(!i&&n.visibility&&(i=!0,"hidden"==n.visibility))return!1}}e=e.parentNode}}(e))return!1;try{if("visible"!=(t.document.visibilityState||t.document.webkitVisibilityState||t.document.mozVisibilityState||t.document.msVisibilityState))return!1;if(t.parent!=t){var a=o(t.frameElement,t.parent);if(!a)return a}var r=!0,l=n,c=e.getBoundingClientRect(),d=c.height||c.bottom-c.top,h=(c.width||(c.right,c.left),SekindoUtils.getViewportSize(t));return(h.h>d&&c.top>h.h+1-d*l||c.bottom<d*l)&&(r=!1),(c.right<0||c.left>h.w)&&(r=!1),r}catch(e){}try{for(var p=0;p<s.length;p++){var u=s[p];if(u.extern||u.$sf){return(u.extern||u.$sf.ext).inViewPercentage()>100*n}}}catch(e){return}}if(e.isAppsGeometry)return e.appsGeometryStatus.viewable;if(window.isAmpProject)return window.ampView;var s=[];return i=i||window,o(t,i)},SekindoUtils.visibilityState=function(){return document.visibilityState||document.webkitVisibilityState||"visible"},SekindoUtils.visibilityChange=function(e){void 0===this.lastId&&(this.lastId=-1),this._callbacks||(this._callbacks={});var t=this,i=document||{};!function(e){if(!i.visibilityState&&!i.webkitVisibilityState)return!1;t.lastId+=1;var n=t.lastId;t._callbacks[n]=e,function(){if(!t._init){var e="visibilitychange";i.webkitVisibilityState&&(e="webkit"+e);var n=function(){(function(e){var n=SekindoUtils.visibilityState();for(var o in t._callbacks)t._callbacks[o].call(i,n)}).apply(t,arguments)};i.addEventListener?i.addEventListener(e,n):i.attachEvent(e,n),t._init=!0}}()}(e)},SekindoUtils.postLogMessage=function(e){var t=new XMLHttpRequest;t.withCredentials=!1,t.open("POST","https://live.sekindo.com/live/liveTracker.php",!0),t.setRequestHeader("Content-type","application/x-www-form-urlencoded"),t.send("req=logMsg&dbg=1&msg="+encodeURIComponent(e))},SekindoUtils.firePixel=function(e,t,i,n){if(e&&""!=e){n||(e+="&cbuster="+(new Date).getTime().toString());var o=void 0!==i.flowStatus&&i.flowStatus;if(e+="&gdpr="+i.gdprIsRequired+"&gdprConsent="+encodeURIComponent(i.gdprInfo.getConsentString())+"&isWePassGdpr="+i.gdprInfo.getIsWePass()+"&ccpa="+i.ccpaIsRequired+"&ccpaConsent="+encodeURIComponent(i.ccpaInfo.consent),e+="&uid="+i.uniqueID+"&pubUrl="+encodeURIComponent(i.pubUrl)+"&floatStatus="+o,t)try{(a=t.ownerDocument.createElement("img")).setAttribute("src",e),a.setAttribute("height","0px"),a.setAttribute("width","0px"),a.style.display="none",t.appendChild(a)}catch(t){try{(a=document.createElement("img")).setAttribute("src",e),a.setAttribute("height","0px"),a.setAttribute("width","0px"),a.style.display="none",document.body.appendChild(a)}catch(t){var s='<img src="'+e+'" height="0px" width="0px" ></img>';document.write(s)}}else try{var a;(a=document.createElement("img")).setAttribute("src",e),a.setAttribute("height","0px"),a.setAttribute("width","0px"),a.style.display="none",document.body.appendChild(a)}catch(t){s='<img src="'+e+'" height="0px" width="0px" ></img>';document.write(s)}}},SekindoUtils.getHighestZIndex=function(e,t){t||(t="*");for(var i,n,o=e||window,s=o.document.querySelectorAll(t),a=0,r=s.length,l=[];a<r;a+=1){try{i=o.getComputedStyle(s[a],null).zIndex||s[a].currentStyle.zIndex,n=o.getComputedStyle(s[a],null).position||s[a].currentStyle.position}catch(i){}if(i&&"static"!==n){var c=parseInt(i,10);c&&l.push(c)}}return l.length?Math.max.apply(null,l):0},SekindoUtils.getTopWindow=function(e){try{if(e.parent!=e)try{var t=SekindoUtils.getTopWindow(e.parent);if(!t)return!1;e=t}catch(e){return!1}}catch(e){return!1}return e},SekindoUtils.getBezierAnim=function(e,t){var i=function(e){return e*e*e},n=function(e){return 3*e*e*(1-e)},o=function(e){return 3*e*(1-e)*(1-e)},s=function(e){return(1-e)*(1-e)*(1-e)};return function(e,t){return t[0]*i(e)+t[1]*n(e)+t[2]*o(e)+t[3]*s(e)}(t,{easeIn:[1,0,0,0],easeOut:[1,1,1,0],easeInOut:[1,1,0,0],linear:[1,.6666,.3333,0]}[e])},SekindoUtils.animateTo=function(e,t,i,n,o,s,a){for(var r=0;r<SekindoUtils.animateArray.length;r++)SekindoUtils.animateArray[r].element==e&&SekindoUtils.animateArray[r].unit==t&&(SekindoUtils.animateArray[r].blocked=!0,SekindoUtils.animateArray[r].cancleAnimation());var l=new this.animateUnit(e,t,i,n,o,s,a);SekindoUtils.animateArray.push(l)},SekindoUtils.stopAnimateUnit=function(e,t){for(var i=0;i<SekindoUtils.animateArray.length;i++)SekindoUtils.animateArray[i].element==e&&SekindoUtils.animateArray[i].unit==t&&(SekindoUtils.animateArray[i].blocked=!0,SekindoUtils.animateArray[i].cancleAnimation())},SekindoUtils.animateArray=[],SekindoUtils.animateUnit=function(e,t,i,n,o,s,a){function r(){c.cancleAnimation(),s&&!c.blocked&&s()}function l(){var s=(new Date).getTime();d=Math.min(1.1,(s-h)/1e3/n);var f=Math.min(1,SekindoUtils.getBezierAnim(o,d)),g="height"==t||"width"==t||"opacity"==t?0:-1/0,m=i;"function"==typeof i&&(m=i());var v=Number(/[+-]?([0-9]*[.])?[0-9]+/.exec(m)[0]),y=Math.max(Math.round(1e3*(f*(v-u)+u))/1e3,g);e[t]=m.replace(v,y),a&&!c.blocked&&a(),d>1||c.blocked?r():c.currAnimFrame=p.requestAnimationFrame(l)}var c=this,d=0,h=(new Date).getTime(),p=SekindoUtils.isFriendlyIframe()?window.top:window;this.blocked=!1,this.element=e,this.unit=t,this.animTimeOut=null;var u=parseFloat(/[+-]?([0-9]*[.])?[0-9]+/.exec(e[t])[0]);return this.cancleAnimation=function(){p.cancelAnimationFrame(c.currAnimFrame);var e=SekindoUtils.animateArray.indexOf(c);SekindoUtils.animateArray.splice(e,1)},n?l():(e[t]=i,a&&!c.blocked&&a(),r()),this},SekindoUtils.resetAllAnimations=function(){for(var e=0;e<SekindoUtils.animateArray.length;e++)SekindoUtils.animateArray[e].blocked=!0;SekindoUtils.animateArray=[]},SekindoUtils.getCurrScript=function(e,t){var i=0;try{return this.currentScript=document.currentScript||n(e.mainPlayerDiv),this.currentScript;function n(e){if(t&&i++>=t)return null;var o=e.previousElementSibling;return-1!=o.src.indexOf("live/liveVi")?o:n(o)}}catch(e){return null}},SekindoUtils.getElementsInObj=function(e,t,i){var n=[];if(!e||!t)return[];if(!(p=e.document||e.contentDocument||e.contentWindow&&e.contentWindow.document))return[];for(var o=p.getElementsByTagName?p.getElementsByTagName("iframe"):[],s=0;s<o.length;s++)try{if(o[s]&&o[s].contentWindow){for(var a=0;a<t.length;a++)for(var r=o[s].contentWindow.document.getElementsByTagName(t[a]),l=0;l<r.length;l++)r[l]&&n.push(r[l]);for(var c=o[s],d=SekindoUtils.getElementsInObj(c,t,!0),h=0;h<d.length;h++)n.push(d[h])}}catch(e){}if(!i)try{for(a=0;a<t.length;a++){var p,u=t[a];for(r=(p=e.document||e.contentDocument||e.contentWindow.document).getElementsByTagName(u),l=0;l<r.length;l++)r[l]&&n.push(r[l])}}catch(e){}return n},SekindoUtils.getElementsInObjById=function(e,t,i){var n=[];if(!e||!t)return[];var o=e.document||e.contentDocument||e.contentWindow&&e.contentWindow.document;if(!o)return[];for(var s=o.getElementsByTagName?o.getElementsByTagName("iframe"):[],a=0;a<s.length;a++)try{if(s[a]&&s[a].contentWindow){for(var r=0;r<t.length;r++)-1!=s[a].frameElement.id.indexOf(t[r])&&n.push(s[a]);for(var l=s[a],c=SekindoUtils.getElementsInObjById(l,t,!0),d=0;d<c.length;d++)n.push(c[d])}}catch(e){}return n},SekindoUtils.implementEventListenersToObj=function(e){e.eventListeners=[],e.addEventListener=function(t,i){for(var n=0;n<e.eventListeners.length;n++)try{if(e.eventListeners[n].type==t&&e.eventListeners[n].callbackFunc==i)return}catch(e){}e.eventListeners.push({type:t,callbackFunc:i})},e.removeEventListener=function(t,i){if(e.eventListeners)for(var n=0;n<e.eventListeners.length;n++)try{e.eventListeners[n].type==t&&e.eventListeners[n].callbackFunc==i&&(e.eventListeners[n]=void 0)}catch(e){}},e.dispatchEvent=function(t,i){if("[object Event]"==String(t)&&(t=t.type),e.eventListeners)for(var n=e.eventListeners.length,o=0;o<n;o++)e.eventListeners&&e.eventListeners[o]&&e.eventListeners[o].type&&e.eventListeners[o].type==t&&e.eventListeners[o].callbackFunc({type:t,val:i})}},SekindoUtils.validURL=function(e,t){if(t)for(var i=["redirector.gvt1.com/videoplayback"],n=e.toLowerCase(),o=0;o<i.length;o++){var s=i[o];if(-1!=n.indexOf(s))return!1}return!!/^https?:/.test(e)},SekindoUtils.isSandboxedIframe=function(e){if(e.parent===e)return 0;try{var t=e.frameElement}catch(e){t=null}if(null===t)return-12;try{return t.hasAttribute("sandbox")?1:SekindoUtils.isSandboxedIframe(e.parent)}catch(e){return-11}},SekindoUtils.getDomain=function(){var e;try{var t=SekindoUtils.getTopWindow(window),i=t?t.location:"";e=encodeURI(i);var n=t?t.location.hostname:""}catch(t){e="",n=null}return{domainUrl:e,domainName:n}},SekindoUtils.loadExternalJs=function(e,t,i){if(SekindoUtils.validURL(e)){for(var n=t||document,o=n.getElementsByTagName("script"),s=0;s<o.length;s++)if(o[s].getAttribute("src")==e)return void(i&&i());var a=n.createElement("SCRIPT");a.src=e,a.onload=function(){i&&i()};n.getElementsByTagName("HEAD")[0].appendChild(a)}},SekindoUtils.secToHMS=function(e){var t=parseInt(e/3600)%24,i=("0"+parseInt(e/60)%60).slice(-2),n=("0"+parseInt(e%60)).slice(-2);return(t?t+":":"")+i+":"+n},SekindoUtils.detectMediaType=function(e){function t(t){for(var i=0;i<e.length;i++){if(-1!=e[i].type.toLowerCase().indexOf(t))if("video"==t){var n=!1,o=document.createElement("video").canPlayType(e[i].type);"probably"!=o&&"maybe"!=o||(n=!0);var s=e[i].src;if(n&&SekindoUtils.validURL(s))return e[i]}else{s=e[i].src;var a=Boolean("mp4"==t);if(SekindoUtils.validURL(s,a))return e[i]}}return!1}e.sort(function(e,t){return"video/mp4"==t.type?1:"video/mp4"==e.type?-1:"video/webm"==t.type?1:"video/webm"==e.type?-1:0});var i={};return i.linear=t("video"),i.mobileLinear=t("mp4"),i.jsVpaid=t("javascript"),i},SekindoUtils.deleteMe=function(e){for(var t in e){e[t]=null;try{delete e[t]}catch(e){}}},SekindoUtils.isFriendlyIframe=function(){var e=!0;if(window!=window.top)try{window.top.location.toString()}catch(t){e=!1}return e},SekindoUtils.KBMFormatter=function(e){return e>=1e9?(e/1e9).toFixed(1).replace(/\.0$/,"")+"B":e>=1e6?(e/1e6).toFixed(1).replace(/\.0$/,"")+"M":e>=1e3?(e/1e3).toFixed(1).replace(/\.0$/,"")+"K":e},SekindoUtils.merge2Objs=function(e,t){for(var i in t)t.hasOwnProperty(i)&&(e[i]=t[i]);return e},SekindoUtils.getOrientation=function(){var e,t="calc";void 0!==window.orientation&&(t="window");try{t=screen.orientation?"screen":t}catch(e){}switch(t){case"screen":e=-1!==screen.orientation.type.indexOf("portrait")?90:0;break;case"window":e=window.orientation;break;case"calc":e=window.innerHeight<window.innerWidth?90:0}return e},SekindoUtils.fileNameFromUrl=function(e){var t,i={filename:"",report:""},n=/[?&]([^=#]+)=([^&#]*)/g;try{for(;t=n.exec(e);)i[t[1]]=t[2];var o=e.match(/\/([^\/?#]+)[^\/]*$/);o&&o.length>1&&(i.fileName=o[1])}catch(e){}return i},SekindoUtils.getVidFileType=function(e){var t="unknown";try{var i=/\:|\./;t=/^blob\:|\.m3u8$|\.mp4$/.exec(e)[0].replace(i,"")}catch(e){}return t},SekindoUtils.cropAmpTitleText=function(e,t){var i=t.split(" "),n=e.nativeTemplateElements.native_title;n.textContent="";for(var o=!1,s=0;s<i.length;s++){if(n.textContent=n.textContent+" "+i[s]+"...",n.offsetHeight>e.height-6){n.textContent=n.textContent.substr(0,n.textContent.length-i[s].length-3),o=!0;break}n.textContent=n.textContent.substr(0,n.textContent.length-3)}o&&(n.textContent=n.textContent+"...")},SekindoUtils.ABTest={isA:function(e,t,i,n){if(!e||"string"!=typeof e||!t)return!1;try{var o=e.split(" / ");if(o.length<2||"ABT"!=o[0])return!1;if(t!=o[1])return!1;if(void 0!==n&&n!=o[2])return!1;if(void 0!==i&&i!=o[3])return!1}catch(e){return!1}return!0}},SekindoUtils.overrideSetInterval=function(){function e(){window.requestAnimationFrame(e);for(var i=0;i<t.length;i++)t[i].ping()}var t=[];window.setInterval=function(e,i){var n=new function(e,t){this.id=Math.round(1e6*Math.random());var i=(new Date).getTime();this.ping=function(){var n=(new Date).getTime();n-i>t&&(i=n,e())}}(e,i);return t.push(n),n.id};var i=window.clearInterval;window.clearInterval=function(e){for(var n=null,o=0;o<t.length;o++)if(t[o].id==e)return void(n=t.splice(o,1));n||i(e)},e()},SekindoUtils.assignObject=function(e,t){return Object.keys(t).forEach(function(i){e[i]=t[i]}),e},SekindoServices.iosVidAutoplayWrapper=function(e){var t=this,i=navigator.appVersion.match(/OS (\d+)_(\d+)_?(\d+)?/);if(!(i&&parseInt(i[1],10)<10)&&e){var n=e.ownerDocument;this.win=n?n.defaultView||n.parentWindow:window,this.vid=e,this.timeStamp=Date.now(),this.isAudio=!1,this.autoplay=this.vid.autoplay,this.isPaused=!this.vid.autoplay,this.src=this.vid.src,this.ended=!1,this.animFrame,this.prevPos=0,this.fallBackTimeout,this.curr=0,this.audio=new Audio,this.audio.addEventListener("playing",function(){t.audio.currentTime=t.vid.currentTime+.3,t.isAudio=!0;var e=new Event("volumechange");t.vid.dispatchEvent(e)}),this.vid.autoplay=!1,this.vid.muted=!0,this.vid.playsInline=!0,this.vid.controls=!1,this.vid.pause=function(e){if(t.isPaused=!0,t.isAudio)try{t.audio.pause()}catch(e){}var i=new Event("pause");t.vid.dispatchEvent(i)},this.vid.play=function(){if(t.win.cancelAnimationFrame(t.animFrame),t.animFrame=t.win.requestAnimationFrame(function(){try{t.setCurrTime()}catch(e){}}),t.ended=!1,t.vid.duration==t.vid.currentTime&&(t.vid.currentTime=0),t.timeStamp=Date.now()-1e3*t.vid.currentTime,t.isPaused=!1,t.isAudio)try{t.audio.play()}catch(e){}var e=new Event("play");t.vid.dispatchEvent(e);e=new Event("playing");t.vid.dispatchEvent(e)},this.vid.__defineGetter__("paused",function(){return t.isPaused}),this.vid.__defineSetter__("paused",function(e){}),this.vid.__defineGetter__("muted",function(){return!t.isAudio}),this.vid.__defineSetter__("muted",function(e){if(t.vid&&t.vid.audioTracks&&!(t.vid.audioTracks.length<=0))if(e){try{t.audio.pause()}catch(e){}t.isAudio=!1;var i=new Event("volumechange");t.vid.dispatchEvent(i)}else if(!t.isPaused){t.audio.src&&t.audio.src==t.src||(t.audio.src=t.src);try{t.audio.play()}catch(e){}}}),this.vid.__defineGetter__("volume",function(){return t.vid&&t.vid.audioTracks&&t.vid.audioTracks.length>0?t.audio.volume:0}),this.vid.__defineSetter__("volume",function(e){if(t.vid&&t.vid.audioTracks&&t.vid.audioTracks.length>0){var i=parseInt(10*e)/10;t.audio.volume=i;var n=new Event("volumechange");t.vid.dispatchEvent(n)}}),this.vid.__defineGetter__("controls",function(){return!1}),this.vid.__defineSetter__("controls",function(e){}),this.vid.__defineGetter__("ended",function(){return t.ended}),this.vid.__defineSetter__("ended",function(e){}),this.vid.__defineGetter__("autoplay",function(){return t.autoplay}),this.vid.__defineSetter__("autoplay",function(e){}),this.observer=new MutationObserver(function(e){e.forEach(function(e){t.vid.load(),t.src=e.target.src;try{t.audio.src=t.src}catch(e){}if(t.isAudio)try{t.audio.play()}catch(e){}t.autoplay&&(t.win.cancelAnimationFrame(t.animFrame),t.animFrame=t.win.requestAnimationFrame(function(){try{t.setCurrTime()}catch(e){}}))})});this.observer.observe(this.vid,{attributes:!0,attributeOldValue:!0,attributeFilter:["src"]}),this.loopStarted=!1,this.vid.addEventListener("canplay",function(e){t.loopStarted||(t.loopStarted=!0,t.timeStamp=Date.now(),t.win.cancelAnimationFrame(t.animFrame),t.animFrame=t.win.requestAnimationFrame(function(){try{t.setCurrTime()}catch(e){}}),setTimeout(function(){var e=new Event("play");t.vid.dispatchEvent(e);e=new Event("playing");t.vid.dispatchEvent(e)},1))}),this.vid.load(),this.eHandler=function(e){switch(e.type){case"seeking":case"seeked":case"ended":e.innerEvent||e.stopImmediatePropagation()}},this.vid.addEventListener("seeked",this.eHandler,!1),this.vid.addEventListener("seeking",this.eHandler,!1),this.vid.addEventListener("ended",this.eHandler,!1),this.setCurrTime=function(){if(t.animFrame&&t.win.cancelAnimationFrame(t.animFrame),t.animFrame=t.win.requestAnimationFrame(function(){try{t.setCurrTime()}catch(e){}}),t.win.clearTimeout(t.fallBackTimeout),t.fallBackTimeout=t.win.setTimeout(function(){t.setCurrTime()},60),!t.isPaused&&t.loopStarted&&(t.isAudio?t.curr=t.audio.currentTime+.2:(t.curr=Math.abs((Date.now()-t.timeStamp)/1e3),(t.curr-t.prevPos>2||t.vid.buffered.end(0)<t.curr+1&&t.curr<t.vid.duration-2)&&(t.timeStamp=Date.now()-1e3*t.vid.currentTime,t.curr=Math.abs((Date.now()-t.timeStamp)/1e3))),Math.abs(t.curr-t.vid.currentTime)<3?t.vid.currentTime=t.curr:(t.timeStamp=Date.now()-1e3*t.vid.currentTime,t.isAudio&&(t.audio.currentTime=t.vid.currentTime)),t.prevPos=t.curr,t.curr>=t.vid.duration)){if(t.vid.loop){(e=new Event("seeking")).innerEvent=!0,t.vid.dispatchEvent(e);(e=new Event("seeked")).innerEvent=!0,t.vid.dispatchEvent(e)}else{t.isPaused=!0,t.ended=!0;var e=new Event("pause");t.vid.dispatchEvent(e),t.win.cancelAnimationFrame(t.animFrame),t.win.clearTimeout(t.fallBackTimeout),t.win.requestAnimationFrame(function(){try{t.reportEndedVid()}catch(e){}})}t.timeStamp=Date.now(),t.curr=0}},this.reportEndedVid=function(){var e=new Event("pause");t.vid.dispatchEvent(e);(e=new Event("ended")).innerEvent=!0,t.vid.dispatchEvent(e)},this.destruct=function(){function e(t){if(t){var i,n,o,s=t.attributes;if(s)for(n=s.length,i=0;i<n;i+=1)"function"==typeof t[o=s[i].name]&&(t[o]=null);if(s=t.childNodes)for(n=s.length,i=0;i<n;i+=1)e(t.childNodes[i]),t.childNodes[i]&&t.removeChild(t.childNodes[i])}}t.win.cancelAnimationFrame(t.animFrame),t.win.clearTimeout(t.fallBackTimeout),e(t)}}},SekindoServices.checkAdViewability=function(e,t){var i=this;e&&(this.config=e),t&&(this.callback=t),this.execute=function(e,t){function n(){var e=i.calcCurrStateByViewPrc(.5);e&&!i.inViewDurationTimeout?i.inViewDurationTimeout=setTimeout(o,1e3*s):!e&&i.inViewDurationTimeout&&(clearTimeout(i.inViewDurationTimeout),i.inViewDurationTimeout=null)}function o(){i.execute(!1),i.callback&&i.callback()}var s=t||i.config.inViewDuration;e&&!i.inViewDurationInterval?i.inViewDurationInterval=setInterval(n,100):e||(i.inViewDurationInterval&&(clearInterval(i.inViewDurationInterval),i.inViewDurationInterval=null),i.inViewDurationTimeout&&(clearTimeout(i.inViewDurationTimeout),i.inViewDurationTimeout=null))},this.calcCurrStateByViewPrc=function(e){return window.primisLog("[[OMIMO]] calcCurrStateByViewPrc"),SekindoUtils.isElementInViewPort(this.config,this.config.mainVideoDiv,this.config.playerIframeWindow,e)},this.destruct=function(){clearTimeout(this.inViewDurationTimeout),clearInterval(this.inViewDurationInterval),SekindoUtils.deleteMe(this)}},SekindoServices.onFullscreenChange=function(e){var t=this;this.currFsState=null,this.checkFullscreenInterval=setInterval(function(){t.currFsState=function(){if(!SekindoUtils.isFriendlyIframe())return null;if(SekindoServices.fullscreen.isFullscreen)return"curr";var e=SekindoUtils.getElementsInObj(window.top,["iframe"]);e.push(window.top);for(var t=0;t<e.length;t++)try{var i=e[t];if(i&&!i.src&&i.contentDocument&&i.contentDocument[SekindoServices.fullscreen.fs.fullscreenElement])return"other"}catch(e){}}()},200),this.getCurrState=function(){return this.currFsState},this.destruct=function(){clearInterval(this.checkFullscreenInterval),SekindoUtils.deleteMe(this)}},SekindoServices.onPageFsChange=new SekindoServices.onFullscreenChange,SekindoServices.setAmpPostMessageListeners=function(e,t){e.hasOwnProperty("ampListenerSet")||(window.addEventListener("message",function(i){if(i.data)try{var n=JSON.parse(i.data.replace("amp-",""));if(n.sentinel!=window.parent.AMP_CONTEXT_DATA.sentinel||"intersection"!=n.type)return;e.currentChanges=n.changes,t(n.changes)}catch(e){}}),window.parent.parent.postMessage({sentinel:window.parent.AMP_CONTEXT_DATA.sentinel,type:"send-intersections"},"*"),e.ampListenerSet=!0)},SekindoServices.onViewabilityChange=function(e){function t(){if(i.config.isAmpProject)o();else{var e=SekindoUtils.isElementInViewPort(i.config,i.config.mainVideoDiv,i.config.playerIframeWindow,i.config.playerInViewPrc);if((e="other"!=SekindoServices.onPageFsChange.getCurrState()&&e)!==i.currViewabilityState){i.currViewabilityState=e;for(var t=0;t<i.callbacksArray.length;t++)i.callbacksArray[t].callback(e)}}}var i=this;this.config=e,this.callbacksArray=[],this.callbackId=0,this.currViewabilityState=SekindoUtils.isElementInViewPort(i.config,i.config.mainVideoDiv,window,i.config.playerInViewPrc),this.checkViewabilityInterval=setInterval(t,200);var n=function(t){var n=e.ampView;if(window.ampView=e.ampView=t[0].intersectionRect.height>e.height/2,n!==e.ampView){i.currViewabilityState=e.ampView;for(var o=0;o<i.callbacksArray.length;o++)i.callbacksArray[o].callback(e.ampView)}};i.config.isAmpProject&&void 0===window.parent.context&&SekindoServices.setAmpPostMessageListeners(e,n);var o=function(){var e=window;do{try{if(void 0!==e.parent.context){e.parent.window.context.observeIntersection(n);break}}catch(e){break}e=e.parent}while(e!=e.parent)};SekindoUtils.visibilityChange(t),this.addCallback=function(e){return this.callbacksArray.push({id:++this.callbackId,callback:e}),this.callbackId},this.removeCallback=function(e){for(var t=0;t<i.callbacksArray.length;t++)if(i.callbacksArray[t].id==e)return void i.callbacksArray.splice(t,1)},this.getCurrState=function(){return this.currViewabilityState},this.destruct=function(){clearInterval(this.checkViewabilityInterval),SekindoUtils.deleteMe(this)}},SekindoServices.onVisibilityChange=function(){var e=this;this.callbacksVisibilityArray=[],this.callbackVisibilityId=0,this.currVisibilityState="visible"===SekindoUtils.visibilityState(),SekindoUtils.visibilityChange(function(){var t="visible"===SekindoUtils.visibilityState();e.currVisibilityState=t;for(var i=0;i<e.callbacksVisibilityArray.length;i++)e.callbacksVisibilityArray[i].callback(t)}),this.addCallback=function(e){return this.callbacksVisibilityArray.push({id:++this.callbackVisibilityId,callback:e}),this.callbackVisibilityId},this.removeCallback=function(t){for(var i=0;i<e.callbacksVisibilityArray.length;i++)if(e.callbacksVisibilityArray[i].id==t)return void e.callbacksVisibilityArray.splice(i,1)},this.getCurrState=function(){return this.currVisibilityState},this.destruct=function(){SekindoUtils.deleteMe(this)}},SekindoServices.fullscreen=function(e){var t,i,n,o=this,s=e.playerIframeWindow.frameElement,a=e.playerIframeWindow.top,r=SekindoUtils.getOrientation(),l=r,c=0;this.config=e;var d=navigator.userAgent.match(/MSIE 10/i),h={requestFullscreen:"requestFS",exitFullscreen:"exitFS",fullscreenElement:"fsElement",fullscreenEnabled:"fsEnabled",fullscreenchange:"fsChange",fullscreenerror:"fsError"};if(this.fs=function(){if(o.config.playerTemplateData.isLightBox)return h;if(o.config.isAmpProject)return["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenEnabled","fullscreenchange","fullscreenerror"]
;for(var e,t=[["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenEnabled","fullscreenchange","fullscreenerror"],["webkitRequestFullscreen","webkitExitFullscreen","webkitFullscreenElement","webkitFullscreenEnabled","webkitfullscreenchange","webkitfullscreenerror"],["webkitRequestFullScreen","webkitCancelFullScreen","webkitCurrentFullScreenElement","webkitCancelFullScreen","webkitfullscreenchange","webkitfullscreenerror"],["mozRequestFullScreen","mozCancelFullScreen","mozFullScreenElement","mozFullScreenEnabled","mozfullscreenchange","mozfullscreenerror"],["msRequestFullscreen","msExitFullscreen","msFullscreenElement","msFullscreenEnabled","MSFullscreenChange","MSFullscreenError"]],i={},n=0;n<t.length;n++)if((e=t[n])&&e[1]in document){for(n=0;n<e.length;n++)i[t[0][n]]=e[n];return i}return h}(),"requestFS"==this.fs.requestFullscreen){SekindoUtils.isFriendlyIframe()&&(e.playerIframeDocument.fsEnabled=!0);var p=function(){if(r=SekindoUtils.getOrientation(),o.config.playerIframeDocument.fsElement){if(r!=l){l=r;var e=0;clearInterval(n),n=setInterval(function(){f(r),++e>7&&clearInterval(n)},100)}}else l=r},u=function(e){o.config.playerIframeDocument.fsElement&&27==(e=e||o.config.playerIframeWindow.event).keyCode&&o.exit()},f=function(t){var i=window.top.innerWidth,n=window.top.innerHeight;s.style.width=i+"px",s.style.height=n+"px",s.style.position="absolute",e.playerIframeDocument.body.style.width=s.offsetWidth+"px",e.playerIframeDocument.body.style.height=s.offsetHeight+"px",c=0,g(!0),o.config.bus.triggerNote("onFSOrientationChange")},g=function(e){var t=0;try{t=parseInt(a.getComputedStyle(a.document.documentElement).paddingTop)}catch(e){}var i=a.document.body.scrollTop||a.document.documentElement.scrollTop;i-=t,s.style.top=o.config.playerTemplateData.isLightBox?"0px":i+"px",s.style.left=o.config.playerTemplateData.isLightBox?"0px":(a.document.body.scrollLeft||a.document.documentElement.scrollLeft)+"px",!0!==e&&++c>1&&(c=0,o.exit())};o.config.playerIframeWindow.addEventListener("orientationchange",p,!1),o.config.playerTemplateData.isLightBox&&(o.config.playerIframeWindow.addEventListener("keydown",u,!1),this.config.videoIFrameWindow.addEventListener("keydown",u,!1))}else this.config.playerIframeWindow.addEventListener("orientationchange",function(){SekindoServices.fullscreen.isFullscreen&&o.config.bus.triggerNote("onFSOrientationChange")},!1);this.request=function(c){if(e.allowFullScreen){var h,p=o.fs.requestFullscreen;if(l=r=SekindoUtils.getOrientation(),c=c||e.playerIframeDocument.documentElement,"requestFS"==p){if(clearInterval(t),clearInterval(i),clearInterval(n),a.removeEventListener("scroll",g),h=!1,d)try{new ActiveXObject("WScript.Shell").SendKeys("{F11}"),h=!0}catch(e){}function u(){return e.playerIframeWindow.outerWidth-screen.width==0&&e.playerIframeWindow.outerHeight-screen.height==0}function f(){o.config.playerTemplateData.isLightBox||SekindoUtils.disablePositions(o.config.playerIframeWindow.frameElement,!0);var i=window.top.innerWidth,n=window.top.innerHeight;o.setts={position:s.style.position,top:s.style.top,left:s.style.left,backgroundColor:s.style.backgroundColor,width:s.style.width,height:s.style.height},s.style.position=o.config.playerTemplateData.isLightBox?"fixed":"absolute",s.style.backgroundColor=o.config.playerTemplateData.isLightBox?"rgba(0,0,0,0.6":"black",o.prevZIndex=s.style.zIndex,s.style.zIndex=2147483647,s.style.width=o.config.playerTemplateData.isLightBox?"100%":i+"px",s.style.height=o.config.playerTemplateData.isLightBox?"100%":n+"px",e.playerIframeDocument.body.style.width=s.offsetWidth+"px",e.playerIframeDocument.body.style.height=s.offsetHeight+"px",o.config.playerTemplateData.isLightBox&&(o.config.mainPlayerDiv.style.top="50%",o.config.mainPlayerDiv.style.left="50%",o.config.mainPlayerDiv.style.position="absolute",o.config.mainPlayerDiv.style.transform="translate(-50%, -50%)"),g(!0),e.playerIframeDocument.fsElement=!0;var r=e.playerIframeDocument.createEvent("Event");r.initEvent("fsChange",!1,!1),r.message="fsChange",e.playerIframeDocument.dispatchEvent(r),h&&(t=setInterval(function(){u()||(clearInterval(t),setTimeout(function(){o.exit(!0)},1))},10)),o.config.playerTemplateData.isLightBox||(a.addEventListener("scroll",g),e.playerIframeDocument.body.addEventListener("touchstart",function(e){e.touches.length>1&&o.exit(!0)}))}h?i=setInterval(function(){u()&&(clearInterval(i),setTimeout(function(){f()},1))},10):f()}else if(/ Version\/5\.1(?:\.\d+)? Safari\//.test(navigator.userAgent))c[p]();else{var m="undefined"!=typeof Element&&"ALLOW_KEYBOARD_INPUT"in Element&&Element.ALLOW_KEYBOARD_INPUT;m?c[p](m):c[p]()}}},this.exit=function(r){if("exitFS"==o.fs.exitFullscreen){if(clearInterval(t),clearInterval(i),clearInterval(n),a.removeEventListener("scroll",g),SekindoUtils.disablePositions(this.config.playerIframeWindow.frameElement,!1),d&&!r)try{new ActiveXObject("WScript.Shell").SendKeys("{F11}")}catch(e){}s.style.position=o.setts.position,s.style.top=o.setts.top,s.style.left=o.setts.left,s.style.backgroundColor=o.setts.backgroundColor,s.style.zIndex=o.prevZIndex,s.style.width=o.setts.width,s.style.height=o.setts.height,e.playerIframeDocument.body.style.width=s.offsetWidth+"px",e.playerIframeDocument.body.style.height=s.offsetHeight+"px",e.playerIframeDocument.fsElement=!1;var l=e.playerIframeDocument.createEvent("Event");l.initEvent("fsChange",!1,!1),l.message="fsChange",e.playerIframeDocument.dispatchEvent(l)}else e.playerIframeDocument[o.fs.exitFullscreen]()},this.toggle=function(e){this.isFullscreen?this.exit():this.request(e)},this.onchange=function(e){o.config.playerIframeDocument.addEventListener(o.fs.fullscreenchange,e,!1)},this.onerror=function(e){o.config.playerIframeDocument.addEventListener(o.fs.fullscreenerror,e,!1)},Object.defineProperties(o,{isFullscreen:{get:function(){return Boolean(o.config.playerIframeDocument[SekindoServices.fullscreen.fs.fullscreenElement])}},element:{enumerable:!0,get:function(){return o.config.playerIframeDocument[SekindoServices.fullscreen.fs.fullscreenElement]}},enabled:{enumerable:!0,get:function(){return Boolean(o.config.playerIframeDocument[SekindoServices.fullscreen.fs.fullscreenEnabled])}}})},SekindoServices.resizeChecker=function(e,t,i){var n=this;this.config=i;var o=1;this.checkResize=function(s){var a=e.currentStyle||i.playerIframeWindow.getComputedStyle(e),r=e.offsetWidth,l=parseFloat(a.marginLeft)+parseFloat(a.marginRight)+(parseFloat(a.paddingLeft)+parseFloat(a.paddingRight))+(parseFloat(a.borderLeftWidth)+parseFloat(a.borderRightWidth));l?r=e.parentNode.offsetWidth:l=0;var c=r-l;(s||o!=c)&&(o=c,c&&(n.config.width=c),t({width:o,height:1/0})),s||this.config.playerIframeWindow.requestAnimationFrame(function(){n.checkResize(!1)})},n.config.playerIframeWindow.requestAnimationFrame(function(){n.checkResize(!1)})},SekindoServices.constructPixelDiv=function(e){var t=this;this.config=e,this.lockReconstruction=!1,this.reConstructPixelDiv=function(){if(!t.lockReconstruction){this.pixelDivTimeout&&clearTimeout(this.pixelDivTimeout),this.config.pixelDivTimeout&&(this.pixelDivTimeout=setTimeout(function(){t.lockReconstruction=!1},t.config.pixelDivTimeout));var i=this.config.pixelDiv;i&&(i.id="divToDestruct");var n=e.playerIframeWindow.document.createElement("div");n.id="pixelsDiv",n.style.width="0px",n.style.height="0px",this.config.mainVideoDiv.appendChild(n),this.config.pixelDiv=n,t.lockReconstruction=!0,setTimeout(function(){i&&i.parentNode&&i.parentNode.removeChild(i)},5e3)}},this.reConstructPixelDiv()},SekindoServices.controlDragElements=function(e){var t=this;this.config=e,this.enableFlowDrag=function(e){function i(){!t.config.flowStatus||SekindoServices.fullscreen.isFullscreen||t.config.isAppSdk||(p.style.top=t.config.savedFlowOffsets.frameTop,p.style.left=t.config.savedFlowOffsets.frameLeft,p.style.bottom=t.config.savedFlowOffsets.frameBottom,p.style.right=t.config.savedFlowOffsets.frameRight,u.style.top=t.config.savedFlowOffsets.clsBtnFrameTop,u.style.left=t.config.savedFlowOffsets.clsBtnFrameLeft,u.style.bottom=t.config.savedFlowOffsets.clsBtnFrameBottom,u.style.right=t.config.savedFlowOffsets.clsBtnFrameRight)}function n(i){if(t.config.flowStatus&&!SekindoServices.fullscreen.isFullscreen&&!t.config.isAppSdk){i.preventDefault(),l=p.offsetTop,c=p.offsetLeft,d=window.top.innerHeight-t.config.playerHeight,h=window.top.innerWidth-t.config.playerWidth;var n=i.touches[0];a=n.clientX,r=n.clientY,e.addEventListener("touchend",s),e.addEventListener("touchmove",o)}}function o(e){e.preventDefault();var i=e.touches[0],n=i.clientY-r,o=i.clientX-a;!0===t.config.bus.getParam("movedToAbsolute")&&(t.config.bus.triggerNote("requestUpdateAbsoluteFlow",!1),p.style.position="fixed",u.style.position="fixed"),p.style.top=Math.min(Math.max(l+n,0),d)+"px",p.style.left=Math.min(Math.max(c+o,0),h)+"px",l=p.offsetTop,c=p.offsetLeft,u.style.left=p.offsetLeft+p.offsetWidth-20+"px",u.style.top=p.offsetTop-20+"px"}function s(){e.removeEventListener("touchend",s),e.removeEventListener("touchmove",o)}var a,r,l=0,c=0,d=0,h=0,p=t.config.playerIframeWindow.frameElement,u=t.config.flowCloseBtnIframe;t.config.flowDragEnabled&&(e.addEventListener("touchstart",n),window.addEventListener("orientationchange",i,!1))}},SekindoOutStream=function(e,t){function i(e){switch(e.type){case"onCloseBtnClick":"slider"!=n.config.playerMode&&"inRead"!=n.config.playerMode&&"inUnit"!=n.config.playerMode&&SekindoUtils.firePixel(n.config.closeFloatPixel,n.config.pixelDiv,n.config),function(){function e(){r.display="none",n.config.sPlayer.destructPlayer()}if("flow"==n.config.playerMode)return n.scrollCheckIntentOnly=!0,void C();if(n.config.adsProcessPaused=!0,n.config.isPlaying=!1,n.config.isAutoPlay="0",n.adsManager.stopAd(!0),n.hadImpression=!1,n.userClosed=!0,"slider"==n.config.playerMode||"sticky"==n.config.playerMode){l.display="none";var t=n.config.videoWidth||n.config.width;SekindoUtils.animateTo(r,o.side,-1*t-100+"px",.8,"easeIn",e)}else"inRead"!=n.config.playerMode&&"inUnit"!=n.config.playerMode||SekindoUtils.animateTo(r,"height","1px",.8,"easeIn",e)}()}}var n=this,o={};this.config=e,this.config.savedFlowOffsets={frameTop:-1,frameLeft:-1,frameBottom:-1,frameRight:-1},this.stickyFlowOffsets={frameTop:-1,frameLeft:-1,frameBottom:-1,frameRight:-1};var s=this.config.playerIframeWindow.frameElement,a=this.config.windowParentDocument,r=s.style,l=this.config.flowCloseBtnIframe.style;if(this.absoluteFlowSettings={movedToAbsolute:!1,prepareAbsoluteFlow:!1,absoluteTopAdjustment:0,fixedAdjustment:0,leftAdjustment:0,bundleElement:null,playerBottom:0,playerLeft:0,absoluteTop:0},this.config.bus.setParam("movedToAbsolute",function(){return n.absoluteFlowSettings.movedToAbsolute}),this.uniqueID=t,"flow"!=this.config.playerMode&&"sticky"!=this.config.playerMode&&(this.config.isAutoPlay="3"),this.hadImpression=!1,this.userClosed=!1,this.scrollCheckIntentOnly=!1,this.config.bus.addCallBack("adCompleted",function(){n.onAdEvent("adCompleted")}),this.config.bus.addCallBack("adStarted",function(){n.onAdEvent("adStarted")}),this.config.bus.addCallBack("onUserEvent",function(e){i(e)}),this.setSize=function(e,t,i){n.config.bus.triggerNote("requestLayoutResize",t)},this.showCloseBtn=function(){l.right="",l.left="",l.bottom="",l.top="",l.display="block",l.position="fixed",l.left=s.offsetLeft+s.offsetWidth-20+"px",n.config.closeBtnPos&&"left"==n.config.closeBtnPos&&(l.left=s.offsetLeft+"px"),"top"==n.config.flowCloseBtnBotTop&&(l.top=s.offsetTop-20+"px"),l.zIndex=r.zIndex,l.width=parseInt(n.config.playerTemplateData.closeBtnWidth)+5+"px",l.height=parseInt(n.config.playerTemplateData.closeBtnHeight)+5+"px",!0===n.config.iframeSizeImportant&&(l.setProperty("width",l.width,"important"),l.setProperty("height",l.height,"important"))},this.closeBtnPosCb=function(){l.left=s.offsetLeft+s.offsetWidth-20+"px",n.config.closeBtnPos&&"left"==n.config.closeBtnPos&&(l.left=s.offsetLeft+"px"),n.config.flowCloseBtnBotTop&&"top"==n.config.flowCloseBtnBotTop?l.top=s.offsetTop-20+"px":l.bottom=parseInt(s.style.bottom)+parseInt(s.offsetHeight)+"px",n.config.flowStatus&&null!==window.top&&window.top.requestAnimationFrame(n.closeBtnPosCb)},"slider"==this.config.playerMode){r.position="fixed",r.boxShadow=null,r.bottom="0px",r.zIndex=SekindoUtils.getHighestZIndex(this.config.playerIframeWindow,"div")+1;var c=!1;"br"==this.config.sliderDir?o.side="right":"bl"==this.config.sliderDir&&(o.side="left");function d(){function e(){r.bottom="0px",r[o.side]="0px",r.boxShadow=null;n.config.bus.triggerNote("requestLayoutResize",{extFrameWidth:1,extFrameHeight:1}),n.userClosed&&n.config.sPlayer.destructPlayer()}var t=n.config.videoWidth||n.config.width,i=n.config.videoHeight||n.config.height;if(!c&&n.hadImpression){c=!0,"1px"==r.height&&(r[o.side]=-1*t-100+"px",r.bottom=n.config.sliderOffset+"px",r.zIndex=SekindoUtils.getHighestZIndex(n.config.playerIframeWindow,"div")+1),n.config.allowFloatingShadow&&(r.boxShadow="1px 1px 6px 3px rgba(0, 0, 0, 0.4)"),r.borderRadius="1px",SekindoUtils.animateTo(r,o.side,"10px",.8,"easeOut");var s={extFrameWidth:t,extFrameHeight:i};n.config.bus.triggerNote("requestLayoutResize",s)}else c&&!n.hadImpression&&(c=!1,SekindoUtils.animateTo(r,o.side,-1*t-100+"px",.8,"easeIn",e))}this.showMeInterval&&clearInterval(this.showMeInterval),this.showMeInterval=setInterval(d,100);var h={extFrameWidth:1,extFrameHeight:1};setTimeout(function(){n.config.bus.triggerNote("requestLayoutResize",h)},1)}else if("inRead"==this.config.playerMode){var p=n.config.videoWidth||n.config.width,u=n.config.videoHeight||n.config.height;this.config.videoIFrame.style.opacity=0;var f=!1;function g(){function e(){r.height="1px",n.config.videoIFrame.style.opacity=0,n.userClosed&&n.config.sPlayer.destructPlayer()}var t=n.config.videoWidth||n.config.width,i=n.config.videoHeight||n.config.height;if(!f&&n.hadImpression){f=!0,n.config.videoIFrame.style.opacity=1;var o={extFrameWidth:t,extFrameHeight:1};n.config.bus.triggerNote("requestLayoutResize",o),SekindoUtils.animateTo(n.config.playerIframeWindow,r,"height",i+"px",.8,"easeOut")}else f&&!n.hadImpression&&(f=!1,SekindoUtils.animateTo(r,"height","1px",.8,"easeIn",e))}this.showMeInterval&&clearInterval(this.showMeInterval),this.showMeInterval=setInterval(g,100);h={width:p,height:u,extFrameWidth:p,extFrameHeight:1};setTimeout(function(){n.config.bus.triggerNote("requestLayoutResize",h)},1)}else if("flow"==this.config.playerMode){this.config.flowStatus=!1;var m,v=.6,y=this.config.flowWidth,b=this.config.flowHeight,S=this.config.playerIframeWindow.frameElement,k=this.config.width,w=this.config.height,A=this.config.sliderSideOffset+("string"==typeof this.config.sliderSideOffset?"":"px");try{if(window.top.sekindoFlowingPlayerOn&&this.config.disableFlowPlayer)return;window.top.sekindoFlowingPlayerOn=!0}catch(e){}(m=this.config.playerIframeDocument.createElement("div")).id="placeHolder",m.style.position="relative",m.style.overflow="hidden";var I=this.config.playerIframeDocument.createElement("img");I.src=this.config.absolutePath+"/content/video/splayer/assets/placeHolder.png",I.alt="Primis Player Placeholder",I.style.position="absolute",I.style.top="50%",I.style.left="50%",I.style.transform="translate(-50%, -50%)",I.style.mozTransform="translate(-50%, -50%)",I.style.webkitTransform="translate(-50%, -50%)",I.style.width="auto",I.style.height="auto",m.appendChild(I),S.parentNode.insertBefore(m,S);var E=this.config.sliderDir.split("");o.side="r"==E[1]?"right":"left",o.botTop="b"==E[0]?"bottom":"top",o.allowFloawAnimate=void 0!==E[2]&&"a"==E[2],this.config.flowCloseBtnBotTop=o.botTop,"m"==E[1]&&(A="calc(50% - "+y/2+"px)"),r[o.botTop]="0px";this.config.bus.addCallBack("requestUpdateAbsoluteFlow",function(e){n.absoluteFlowSettings.prepareAbsoluteFlow=e}),this.config.bus.addCallBack("requestMoveFlowToAbsolutePosition",function(e){n.absoluteFlowSettings.movedToAbsolute=e});function P(){k=n.config.playerWidth||n.config.width,w=n.config.playerHeight||n.config.height;var e=k>w?"height":"width";if(I.style[e]="100%",n.config.flowStatus=!0,n.config.bus.triggerNote("onFlowStatusChange",!0),n.config.allowFloatingShadow&&(r.boxShadow="1px 1px 6px 3px rgba(0, 0, 0, 0.4)"),r.borderRadius="1px",r.position="fixed",r.zIndex=n.config.flowZindex||SekindoUtils.getHighestZIndex(n.config.playerIframeWindow,"div")+1,m.style.width=n.config.playerWidth+"px",m.style.height=n.config.playerHeight+"px",r[o.side]=A,r[o.botTop]=n.config.sliderOffset+"px",n.setSize(S,{source:"doFlow",width:y,height:b}),o.allowFloawAnimate&&!n.config.isAmpProject)try{r[o.botTop]="-80px",SekindoUtils.animateTo(r,o.botTop,n.config.sliderSideOffset+"px",v,"easeInOut")}catch(e){}n.showCloseBtn(),-1==n.config.savedFlowOffsets.frameTop&&"desktop"!==n.config.clientInfo.deviceType&&(n.config.savedFlowOffsets.frameTop=r.top,n.config.savedFlowOffsets.frameBottom=r.bottom,n.config.savedFlowOffsets.frameRight=r.right,n.config.savedFlowOffsets.frameLeft=r.left,n.config.savedFlowOffsets.clsBtnFrameTop=l.top,n.config.savedFlowOffsets.clsBtnFrameBottom=l.bottom,n.config.savedFlowOffsets.clsBtnFrameRight=l.right,n.config.savedFlowOffsets.clsBtnFrameLeft=l.left),window.top.requestAnimationFrame(n.closeBtnPosCb)}function C(){r.position="fixed",r.boxShadow="0px 0px 0px 0px rgba(0, 0, 0, 0)",r.borderRadius="0px","desktop"!==n.config.clientInfo.deviceType&&(r.top=n.config.savedFlowOffsets.frameTop,r.left=n.config.savedFlowOffsets.frameLeft,r.bottom=n.config.savedFlowOffsets.frameBottom,r.right=n.config.savedFlowOffsets.frameRight),n.config.flowStatus=!1,n.config.bus.triggerNote("onFlowStatusChange",!1),m.style.width="0px",m.style.height="0px",r.position="relative",r.boxShadow=null,r[o.side]=null,r[o.botTop]=null,r.zIndex=0,n.config.responsive||n.setSize(S,{source:"doUnFlow"},!0),l.display="none"}function T(){if(n.scrollCheckIntentOnly)0!=n.config.onViewabilityChange.getCurrState()||n.config.soundEnabledByUser||n.config.bus.triggerNote("intentOff");else if(SekindoServices.fullscreen.isFullscreen)"Internet Explorer"==n.config.clientInfo.extra.browser&&(n.ie11Delay=!0,setTimeout(function(){n.ie11Delay=!1},1e3));else if(!n.ie11Delay){var e="both"===n.config.flowMode||"above"===n.config.flowMode,t="both"===n.config.flowMode||"below"===n.config.flowMode,i=m.getBoundingClientRect().bottom;n.config.isAmpProject||(n.config.flowStatus||"visible"!==SekindoUtils.visibilityState()||n.config.onViewabilityChange.getCurrState()?!n.config.flowStatus&&"visible"===SekindoUtils.visibilityState()&&n.config.onViewabilityChange.getCurrState()?"seenboth"==n.config.flowMode&&(n.config.flowMode="both"):n.config.flowStatus&&e&&t&&i>w/2&&i<window.top.innerHeight+w/2?C():n.config.flowStatus&&(i>w/2&&t&&!e||i<window.top.innerHeight+w/2&&e&&!t)?C():n.config.flowStatus&&void 0!==n.config.flowToAbsoluteParams&&n.absoluteFlowSettings.prepareAbsoluteFlow&&(n.absoluteFlowSettings.movedToAbsolute?(n.absoluteFlowSettings.playerBottom=s.getBoundingClientRect().bottom,n.absoluteFlowSettings.playerBottom>window.parent.innerHeight-n.absoluteFlowSettings.fixedAdjustment&&(r.position="fixed",r.top=n.stickyFlowOffsets.frameTop,r.bottom=n.stickyFlowOffsets.frameBottom,r.left=n.stickyFlowOffsets.frameLeft,r.right=n.stickyFlowOffsets.frameRight,l.position="fixed",l.top=n.stickyFlowOffsets.clsBtnFrameTop,l.bottom=n.stickyFlowOffsets.clsBtnFrameBottom,l.right=n.stickyFlowOffsets.clsBtnFrameRight,l.left=n.stickyFlowOffsets.clsBtnFrameLeft,n.config.bus.triggerNote("requestMoveFlowToAbsolutePosition",!1))):function(){if(null!=n.absoluteFlowSettings.bundleElement){var e=n.absoluteFlowSettings.bundleElement.getBoundingClientRect().top;"desktop"!==n.config.clientInfo.deviceType?n.absoluteFlowSettings.absoluteTop=n.absoluteFlowSettings.bundleElement.offsetTop-b-n.absoluteFlowSettings.absoluteTopAdjustment:n.absoluteFlowSettings.absoluteTop=n.absoluteFlowSettings.bundleElement.offsetTop-s.parentNode.offsetTop-b-n.absoluteFlowSettings.absoluteTopAdjustment,n.absoluteFlowSettings.playerBottom=s.getBoundingClientRect().bottom,n.absoluteFlowSettings.playerBottom>=e-n.absoluteFlowSettings.absoluteTopAdjustment&&(r.position="absolute",r.bottom="auto",r.right=n.stickyFlowOffsets.frameRight,r.top=n.absoluteFlowSettings.absoluteTop+"px",r.left="auto"!==n.stickyFlowOffsets.frameLeft?parseInt(n.stickyFlowOffsets.frameLeft,10)-n.absoluteFlowSettings.playerLeft+"px":a.body.clientWidth-n.absoluteFlowSettings.playerLeft-y-n.absoluteFlowSettings.leftAdjustment+"px",l.position="absolute",l.top=n.absoluteFlowSettings.absoluteTop-20+"px",l.bottom="auto",l.right="auto",l.left=a.body.clientWidth-20-n.absoluteFlowSettings.leftAdjustment+"px",n.config.closeBtnPos&&"left"==n.config.closeBtnPos&&(l.left=s.offsetLeft+"px"),n.config.bus.triggerNote("requestMoveFlowToAbsolutePosition",!0))}}()):i>window.top.innerHeight-w/2&&e||i<-w/2&&t?(n.config.flowStatus=!0,P(),void 0!==n.config.flowToAbsoluteParams&&function(){n.config.bus.triggerNote("requestUpdateAbsoluteFlow",!0),n.config.bus.triggerNote("requestMoveFlowToAbsolutePosition",!1),-1==n.stickyFlowOffsets.frameTop&&(n.stickyFlowOffsets.frameTop=r.top,n.stickyFlowOffsets.frameBottom=r.bottom,n.stickyFlowOffsets.frameRight=r.right,n.stickyFlowOffsets.frameLeft=r.left,n.stickyFlowOffsets.clsBtnFrameTop=l.top,n.stickyFlowOffsets.clsBtnFrameBottom=l.bottom,n.stickyFlowOffsets.clsBtnFrameRight=l.right,n.stickyFlowOffsets.clsBtnFrameLeft=l.left),n.absoluteFlowSettings.absoluteTopAdjustment=void 0!==n.config.flowToAbsoluteParams.absTopAdj?n.config.flowToAbsoluteParams.absTopAdj:0,n.absoluteFlowSettings.fixedAdjustment=void 0!==n.config.flowToAbsoluteParams.fixedAdj?n.config.flowToAbsoluteParams.fixedAdj:0,n.absoluteFlowSettings.leftAdjustment=void 0!==n.config.flowToAbsoluteParams.leftAdj?n.config.flowToAbsoluteParams.leftAdj:0;var e=void 0!==n.config.flowToAbsoluteParams.stopElId?n.config.flowToAbsoluteParams.stopElId:null;null!=e&&(n.absoluteFlowSettings.bundleElement=a.getElementById(e)),n.absoluteFlowSettings.playerLeft=s.parentNode.getBoundingClientRect().left}()):0!=n.config.onViewabilityChange.getCurrState()||n.config.soundEnabledByUser||n.config.bus.triggerNote("intentOff"))}}this.scrollCheckInterval=setInterval(function(){T()},50)}else if("sticky"===this.config.playerMode)this.config.flowStatus=!0,S=this.config.playerIframeWindow.frameElement,k=this.config.flowWidth,A=this.config.sliderSideOffset+("string"==typeof this.config.sliderSideOffset?"":"px"),E=this.config.sliderDir.split(""),o.side="r"===E[1]?"right":"left",o.botTop="b"===E[0]?"bottom":"top",this.config.flowCloseBtnBotTop=o.botTop,"m"===E[1]&&(A="calc(50% - "+k/2+"px)"),this.config.allowFloatingShadow&&(r.boxShadow="1px 1px 6px 3px rgba(0, 0, 0, 0.4)"),r.borderRadius="1px",r.position="fixed",r.zIndex=this.config.flowZindex||SekindoUtils.getHighestZIndex(this.config.playerIframeWindow,"div")+1,r[o.side]=A,r[o.botTop]=this.config.sliderOffset+"px",setTimeout(this.showCloseBtn,100),-1==this.config.savedFlowOffsets.frameTop&&"desktop"!==this.config.clientInfo.deviceType&&(this.config.savedFlowOffsets.frameTop=r.top,this.config.savedFlowOffsets.frameBottom=r.bottom,this.config.savedFlowOffsets.frameRight=r.right,this.config.savedFlowOffsets.frameLeft=r.left,this.config.savedFlowOffsets.clsBtnFrameTop=l.top,this.config.savedFlowOffsets.clsBtnFrameBottom=l.bottom,this.config.savedFlowOffsets.clsBtnFrameRight=l.right,this.config.savedFlowOffsets.clsBtnFrameLeft=l.left),window.top.requestAnimationFrame(this.closeBtnPosCb);else if("inUnit"===this.config.playerMode){this.config.bus.addCallBack("adStarted",D),this.config.bus.addCallBack("adCompleted",x),this.config.videoIFrame.style.opacity=0;function D(){n.config.videoWidth||n.config.width;var e=n.config.videoHeight||n.config.height;n.config.videoIFrame.style.opacity=1,r.height=e+"px"}function x(){n.config.videoIFrame.style.opacity=0,r.height="1px"}h={width:p,height:u,extFrameWidth:p,extFrameHeight:1};setTimeout(function(){n.config.bus.triggerNote("requestLayoutResize",h)},1)}},SekindoOutStream.prototype.onAdEvent=function(e){"adStarted"==e?this.hadImpression=!0:"adCompleted"==e&&(this.hadImpression=!1)},SekindoOutStream.prototype.destruct=function(){this.showMeInterval&&clearInterval(this.showMeInterval)},SekindoIMAWrapper=function(e,t,i){function n(){google.ima.settings.setVpaidMode(google.ima.ImaSdkSettings.VpaidMode.INSECURE),r.adDisplayContainer=d=new google.ima.AdDisplayContainer(r.vpaidSlot,h),d.initialize(),r.adsLoader=c=new google.ima.AdsLoader(d),c.getSettings().setAutoPlayAdBreaks(!1),c.addEventListener(google.ima.AdsManagerLoadedEvent.Type.ADS_MANAGER_LOADED,o,!1),c.addEventListener(google.ima.AdErrorEvent.Type.AD_ERROR,a,!1);var e=r.config.videoWidth||r.config.width,t=r.config.adVideoHeight||r.config.height,i=new google.ima.AdsRequest;i.adTagUrl=r.params.vastURL,i.linearAdSlotWidth=e,i.linearAdSlotHeight=t,c.requestAds(i)}function o(e){var t=new google.ima.AdsRenderingSettings;t.restoreCustomPlaybackStateOnAdBreakComplete=!1,r.adsManager=l=e.getAdsManager(h,t),l.addEventListener(google.ima.AdErrorEvent.Type.AD_ERROR,a),l.addEventListener(google.ima.AdEvent.Type.AD_BREAK_READY,s),l.addEventListener(google.ima.AdEvent.Type.LOADED,s),l.addEventListener(google.ima.AdEvent.Type.IMPRESSION,s),l.addEventListener(google.ima.AdEvent.Type.ALL_ADS_COMPLETED,s),l.addEventListener(google.ima.AdEvent.Type.STARTED,s),l.addEventListener(google.ima.AdEvent.Type.PAUSED,s),l.addEventListener(google.ima.AdEvent.Type.RESUMED,s),l.addEventListener(google.ima.AdEvent.Type.FIRST_QUARTILE,s),l.addEventListener(google.ima.AdEvent.Type.MIDPOINT,s),l.addEventListener(google.ima.AdEvent.Type.THIRD_QUARTILE,s),l.addEventListener(google.ima.AdEvent.Type.COMPLETE,s),l.addEventListener(google.ima.AdEvent.Type.INTERACTION,s),l.addEventListener(google.ima.AdEvent.Type.USER_CLOSE,s),l.addEventListener(google.ima.AdEvent.Type.SKIPPED,s),l.addEventListener(google.ima.AdEvent.Type.CLICK,s),l.addEventListener(google.ima.AdEvent.Type.VOLUME_CHANGED,s),l.addEventListener(google.ima.AdEvent.Type.VOLUME_MUTED,s);try{var i=r.config.videoWidth||r.config.width,n=r.config.adVideoHeight||r.config.height;l.init(i,n,google.ima.ViewMode.NORMAL)}catch(e){a("adsManager.init problem")}}function s(e){switch(e.type){case google.ima.AdEvent.Type.ALL_ADS_COMPLETED:r&&!r.hadImpression?a("noImaAds"):(r.parent&&r.parent.onVpaidEvent({type:"onAdVideoComplete",val:r}),r.parent&&r.parent.onVpaidEvent({type:"onStopAd",val:r}));break;case google.ima.AdEvent.Type.LOADED:(t=e.getAd()).isLinear()?(r&&r.config&&(SekindoUtils.trackSekindoAdEvents("response",null,r.params,r.config),SekindoUtils.trackSekindoAdEvents("win",null,r.params,r.config)),r.parent&&r.parent.onVpaidEvent({type:"onAdLoaded"})):a("nonLinearAd");break;case google.ima.AdEvent.Type.AD_BREAK_READY:break;case google.ima.AdEvent.Type.IMPRESSION:r&&(r.hadImpression=!0),r&&r.killTimeOut&&clearTimeout(r.killTimeOut),r.parent&&r.parent.onVpaidEvent({type:"onAdImpression"}),r.config.impressionTimeout&&r.config.impressionTimeout>0&&(r.impressionTimer=setTimeout(function(){r.onAdError("impressionTimer")},r.config.impressionTimeout));break;case google.ima.AdEvent.Type.STARTED:var t=e.getAd();r.parent&&r.parent.onVpaidEvent({type:"onStartAd"}),r.parent&&r.parent.onVpaidEvent({type:"onAdVideoStart",params:{isAdHasSkip:-1!=t.getSkipTimeOffset()}});var i=r.config.videoWidth||r.config.width,n=r.config.adVideoHeight||r.config.height;r.resizeAd(i,n,google.ima.ViewMode.NORMAL);break;case google.ima.AdEvent.Type.PAUSED:r.parent&&r.parent.onVpaidEvent({type:"onAdPaused"});break;case google.ima.AdEvent.Type.RESUMED:r.parent&&r.parent.onVpaidEvent({type:"onAdPlaying"});break;case google.ima.AdEvent.Type.FIRST_QUARTILE:r.parent&&r.parent.onVpaidEvent({type:"onAdVideoFirstQuartile"});break;case google.ima.AdEvent.Type.MIDPOINT:r.parent&&r.parent.onVpaidEvent({type:"onAdVideoMidpoint"});break;case google.ima.AdEvent.Type.THIRD_QUARTILE:r.parent&&r.parent.onVpaidEvent({type:"onAdVideoThirdQuartile"});break;case google.ima.AdEvent.Type.COMPLETE:r.parent&&r.parent.onVpaidEvent({type:"onAdVideoComplete",val:r}),r.parent&&r.parent.onVpaidEvent({type:"onStopAd",val:r});break;case google.ima.AdEvent.Type.INTERACTION:r.parent&&r.parent.onVpaidEvent({type:"onAdInteraction"});break;case google.ima.AdEvent.Type.USER_CLOSE:case google.ima.AdEvent.Type.SKIPPED:r.parent&&(r.config.bus.triggerNote("APIadSkip"),r.config.isLastImpSkipped=!0,r.config.primisConsoleLog("google.ima.AdEvent.Type.SKIPPED"),r.parent.parent.parent.isTriggerAdCompletedNormal=!0,r.parent.onVpaidEvent({type:"onSkipAd"}));break;case google.ima.AdEvent.Type.CLICK:r.parent&&r.parent.onVpaidEvent({type:"onAdClickThru"});break;case google.ima.AdEvent.Type.VOLUME_CHANGED:r.parent&&r.parent.onVpaidEvent({type:"onAdVolumeChange",val:r.adsManager.getVolume()});break;case google.ima.AdEvent.Type.VOLUME_MUTED:r.parent&&r.parent.onVpaidEvent({type:"onAdVolumeChange",val:0})}}function a(e){r.parent&&r.parent.onVpaidEvent({type:"onAdError"})}var r=this;this.config=e,this.parent=i,this.hadImpression=!1,this.params=t,this.replacePermutiveMacro(),this.killTimeOut&&clearTimeout(this.killTimeOut),this.params.killTime&&this.params.killTime>0&&(this.killTimeOut=setTimeout(function(){r.onAdError("killTimeOut")},this.params.killTime));var l,c,d,h=this.params.environmentVars.videoSlot;if(this.vpaidSlot=this.params.environmentVars.slot,window.google&&window.google.ima)n();else{var p=document.createElement("script");p.onload=function(){n()},p.onerror=function(){r.onAdError("scriptFailToLoad")},p.src="//imasdk.googleapis.com/js/sdkloader/ima3.js",document.body.appendChild(p)}},SekindoIMAWrapper.prototype.replacePermutiveMacro=function(){var e="[]";try{e=localStorage._pdfps}catch(t){e="[]"}var t=encodeURIComponent(JSON.parse(e||"[]").slice(0,250).join(","));this.params.vastURL=this.params.vastURL.replace("${PERMUTIVE_MACRO}",t)},SekindoIMAWrapper.prototype.startAd=function(){try{this.adsManager&&this.adsManager.start()}catch(e){this.onAdError("adsManager.start problem")}},SekindoIMAWrapper.prototype.stopAd=function(){this.adsManager&&this.adsManager.stop()},SekindoIMAWrapper.prototype.pauseAd=function(){this.adsManager&&this.adsManager.pause()},SekindoIMAWrapper.prototype.resumeAd=function(){this.adsManager&&this.adsManager.resume()},SekindoIMAWrapper.prototype.resizeAd=function(e,t,i){this.adsManager&&this.adsManager.resize(e,t,i)},SekindoIMAWrapper.prototype.setAdVolume=function(e){if(!this.doNotUseSetAdVolume)try{this.adsManager&&this.adsManager.setVolume(e)}catch(e){}},SekindoIMAWrapper.prototype.onAdError=function(e){this.parent&&this.parent.onVpaidEvent({type:"onAdError"})},SekindoIMAWrapper.prototype.destruct=function(){this.adsManager&&this.adsManager.destroy(),this.adsLoader&&this.adsLoader.destroy(),this.adDisplayContainer&&this.adDisplayContainer.destroy(),this.killTimeOut&&clearTimeout(this.killTimeOut),this.impressionTimer&&clearTimeout(this.impressionTimer),SekindoUtils.deleteMe(this)},AppSdkApi.prototype.onReportFromApp=function(e){switch(this.lastViewable,this.lastIsInView,e.id){case"viewabilityStatus":var t=this.getObjBy(e.data,"id","isInView").value,i=this.getObjBy(e.data,"id","verticalPCT").value,n=this.getObjBy(e.data,"id","horizontalPCT").value,o=(this.getObjBy(e.data,"id","totalPCT").value,this.getObjBy(e.data,"id","verticalPos").value,this.getObjBy(e.data,"id","horizontalPos").value,this.getObjBy(e.data,"id","hasFlowParent").value),s=n>0&&i>0;window.primisLog("[[AppSDKApi]] viewable: "+s),window.primisLog("[[AppSDKApi]] flowSkinWrap: "+this.config.flowSkinWrap),window.primisLog("[[AppSDKApi]] hasFlowParent: "+o),window.primisLog("[[AppSDKApi]] isInView: "+t),window.primisLog("[[AppSDKApi]] setFlowOnApp?"),this.lastViewable!=s||this.lastIsInView!=t?(this.lastViewable=s,this.lastIsInView=t,this.config.appsGeometryStatus.viewable=s,this.config.appsGeometryStatus.inActiveView=t,window.primisLog("[[AppSDKApi]] playerMode: "+this.config.playerMode),!s&&t&&"flow"==this.config.playerMode&&!this.disableFlowMode&&o?(window.primisLog("[[AppSDKApi]] setFlowOnApp"),this.config.flowStatus=!0,this.config.bus.triggerNote("onFlowStatusChange",!0),this.config.bus.triggerNote("requestLayoutResize",{source:"doFlow",width:this.config.flowWidth,height:this.config.flowHeight}),this.config.appsGeometryStatus.viewable=!0,this.config.appsGeometryStatus.inActiveView=!0):o&&(window.primisLog("[[AppSDKApi]] setUnFlowOnApp1"),this.setUnFlowOnApp())):o!=this.hasFlowParent&&(this.hasFlowParent=o,window.primisLog("[[AppSDKApi]] setUnFlowOnApp2"),this.setUnFlowOnApp()),window.primisLog("[[AppSDKApi]] viewabilityChange appsGeometryStatus.viewable: "+this.config.appsGeometryStatus.viewable)}},AppSdkApi.prototype.setFlowOnApp=function(e){},AppSdkApi.prototype.setUnFlowOnApp=function(e){var t=this
;window.primisLog("[[AppSDKApi]] setUnFlowOnApp"),this.config.flowStatus=!1,this.config.bus.triggerNote("onFlowStatusChange",!1),this.config.bus.triggerNote("requestLayoutResize",{source:"doUnFlow",responsive:!0});(e=new AppApiObj).id="goUnFlow",e.type="command",setTimeout(function(){t.sendToApp(e)},1)},AppSdkApi.prototype.onRequestFromApp=function(e){},AppSdkApi.prototype.onCommandFromApp=function(e){},AppSdkApi.prototype.getObjBy=function(e,t,i){return e.filter(function(e){return e[t]==i})[0]},SekindoSPlayer.prototype.constructIframes=function constructIframes(){var ref=this,sandbox=this.config.isDesktop;if(document&&document.readyState&&"complete"==document.readyState){this.currentScript=this.config.playerIframeDocument.currentScript||function(){var e=ref.config.playerIframeDocument.getElementsByTagName("script");return e[e.length-1]}();var mainPlayerDiv=this.config.playerIframeDocument.createElement("div");mainPlayerDiv.id="Player-Div-"+this.uniqueID,mainPlayerDiv.style.width="max-content",mainPlayerDiv.style.height="max-content";var mainVideoDiv=this.config.playerIframeDocument.createElement("div");mainVideoDiv.id="Video-Div-"+this.uniqueID,mainVideoDiv.style.position="relative";var iframe=this.config.playerIframeDocument.createElement("iframe");if(iframe.id="Video-iFrame-"+this.uniqueID,sandbox&&(iframe.sandbox="allow-same-origin allow-scripts allow-popups allow-forms"),iframe.marginWidth="0",iframe.marginHeight="0",iframe.hSpace="0",iframe.vSpace="0",iframe.frameBorder="0",iframe.scrolling="no",mainVideoDiv.appendChild(iframe),mainPlayerDiv.appendChild(mainVideoDiv),this.config.flowSkinWrap){this.config.flowSkinWrap=this.config.flowSkinWrap.replace('<script type="text/javascript">','<script type="text/javascript" id="nativeFlowHtmlScript">');var flowSkinWrapDiv=this.config.playerIframeDocument.createElement("div");flowSkinWrapDiv.id="flowSkinWrapper",flowSkinWrapDiv.innerHTML=this.config.flowSkinWrap.replace("${VIDEO_PLAYER}",'<div id="flowSkinPlayer" style="display: inline-block;position: relative"></div>'),this.config.playerIframeDocument.body.appendChild(flowSkinWrapDiv);var flowSkinPlayerDiv=this.config.playerIframeDocument.getElementById("flowSkinPlayer");flowSkinPlayerDiv.appendChild(mainPlayerDiv),this.currentScript&&this.currentScript.parentNode&&(this.parentNode=this.currentScript.parentNode);var flowScript=this.config.playerIframeDocument.getElementById("nativeFlowHtmlScript");flowScript&&eval(flowScript.innerHTML)}else this.currentScript&&this.currentScript.parentNode?(this.currentScript.parentNode.insertBefore(mainPlayerDiv,this.currentScript),this.parentNode=this.currentScript.parentNode):this.config.playerIframeDocument.body.appendChild(mainPlayerDiv);if(!this.config.isDesktop){var audio=this.config.playerIframeDocument.createElement("AUDIO");audio.id=this.uniqueID+"Audio",this.config.playerIframeDocument.body.appendChild(audio)}this.config.playerIframeDocument.getElementsByTagName("body")[0].style.margin=0,this.constructContainer(iframe)}else{var code='<div id="Player-Div-'+this.uniqueID+'" style="width: max-content; height: max-content;"><div id="Video-Div-'+this.uniqueID+'" style="position:relative;"><iframe src="about:blank" '+(sandbox?'sandbox="allow-same-origin allow-scripts allow-popups allow-forms"':"")+' height="0" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" id="Video-iFrame-'+this.uniqueID+'"></iframe></div></div>';this.config.flowSkinWrap&&(code='<div id="flowSkinWrapper" style="display: none">'+this.config.flowSkinWrap.replace("${VIDEO_PLAYER}",'<div id="flowSkinPlayer" style="display: inline-block;position: relative">'+code+"</div>")+"</div>");var frameDocument=this.config.playerIframeDocument;if(frameDocument.write(code),frameDocument.getElementsByTagName("body")[0].style.margin=0,!this.config.isDesktop){var code='<audio id="'+this.uniqueID+'Audio"></audio>';frameDocument.write(code)}frameDocument.close(),this.readyStateInterval=setInterval(function(){ref.constructContainer()},100)}},SekindoSPlayer.prototype.constructContainer=function(e){var t=this.config.playerIframeDocument;if(!this.constructed){this.constructed=!0;try{SekindoUtils.scriptOptimizer()}catch(e){return void(this.constructed=!1)}if(this.videoIFrame=e||t.getElementById("Video-iFrame-"+this.uniqueID),this.videoIFrame){try{this.videoIFrameWindow=this.videoIFrame.contentWindow||this.videoIFrame.contentDocument.defaultView,this.videoIFrameDoc=this.videoIFrameWindow.document||this.videoIFrame.contentDocument}catch(e){return void(this.constructed=!1)}try{this.videoIFrameDoc.open(),this.videoIFrameDoc.close()}catch(e){return void(this.constructed=!1)}var i=this.videoIFrameDoc.readyState;if("complete"==i||"interactive"==i){if(this.readyStateInterval&&clearInterval(this.readyStateInterval),this.config.isNativeTemplate){this.config.nativeTemplateElements={};try{if(this.config.isAmpStickyAd)this.config.nativeTemplateElements.native_title=window.parent.document.getElementById("native_title"+this.uniqueID);else{var n=window.frameElement;this.config.nativeTemplateElements.native_title=n.ownerDocument.getElementById("native_title"+this.uniqueID),this.config.nativeTemplateElements.native_desc=n.ownerDocument.getElementById("native_desc"+this.uniqueID),this.config.nativeTemplateElements.native_vid_link=n.ownerDocument.getElementsByClassName("native_vid_link"+this.uniqueID)}}catch(e){}}this.debugAgent.isActivateDebugWindow()&&this.debugAgent.activateDebugWindow(),this.constructIntainer()}else this.constructed=!1}else this.constructed=!1}},SekindoSPlayer.prototype.constructIntainer=function(){function e(e){try{window.primisLog("[[ERROR]] - "+e)}catch(e){}return!0}var t=this.config.playerIframeDocument;this.videoIFrame.frameBorder="0",this.videoIFrame.scrolling="no";var i=this.videoIFrameDoc.createElement("base");i.href=this.config.dummyBaseHref,this.videoIFrameDoc.head.appendChild(i),this.configDebug||(this.videoIFrameWindow.onerror=e,this.videoIFrameWindow.console&&(this.videoIFrameWindow.console.error=e)),this.config.videoIFrame=this.videoIFrame,this.config.videoIFrameWindow=this.videoIFrameWindow,this.config.videoIFrameDoc=this.videoIFrameDoc,this.config.videoIFrameWindow.Element.prototype.scrollIntoView=function(){},this.config.mainVideoDiv||(this.config.mainVideoDiv=t.getElementById("Video-Div-"+this.uniqueID)),this.config.mainPlayerDiv||(this.config.mainPlayerDiv=t.getElementById("Player-Div-"+this.uniqueID)),this.config.currScript=SekindoUtils.getCurrScript(this.config,3),this.config.pixelDivConstructor=new SekindoServices.constructPixelDiv(this.config),SekindoServices.fullscreen=this.config.FSservice=new SekindoServices.fullscreen(this.config),this.config.flowSkinWrap&&(this.config.flowSkinWrapper=this.config.playerIframeDocument.getElementById("flowSkinWrapper"),this.config.flowSkinWrapper.style.display="inline-block"),this.flowManager=new SekindoFlowManager(this.config),this.config.playerMode&&"normal"!=this.config.playerMode&&(this.outStream=new SekindoOutStream(this.config,this.uniqueID)),this.config.nativeSkinIframeWindow&&this.config.isPrimisNativeSkin&&(this.nativeSkinApi=new this.config.nativeSkinIframeWindow.SekindoNativeSkinApi(this.config)),this.constructPlayer()},SekindoSPlayer.prototype.constructPlayer=function(){var e=this;this.config.onViewabilityChange=new SekindoServices.onViewabilityChange(this.config),this.config.onVisibilityChange=new SekindoServices.onVisibilityChange,SekindoUtils.applyExternalRules(this.config,"config","init"),this.config.layoutManager=new LayoutManager(this.config),""!=this.config.playerApiId&&("ie"==this.config.clientInfo.browser&&function(){function e(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var i=document.createEvent("CustomEvent");return i.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),i}if("function"==typeof window.CustomEvent)return!1;e.prototype=window.Event.prototype,window.CustomEvent=e}(),this.config.playerApi=new PlayerAPI(this.config.playerApiId,this.config),window.top.dispatchEvent(new CustomEvent(this.config.playerApi.PLAYER_API_INIT_EVENT,{detail:this.config.playerApi}))),SekindoUtils.applyExternalRules(this.config,"style","init"),this.adsManager=new SekindoAdsManager(this.uniqueID,this.config),this.outStream&&(this.outStream.adsManager=this.adsManager,"flow"!=this.config.playerMode&&"sticky"!=this.config.playerMode&&(this.config.contentPlayList=[],this.config.bus.triggerNote("hideTimeBar"))),this.playlistManager=new SekindoPlaylistManager(this.uniqueID,this.config),this.audioElement=this.config.playerIframeDocument.getElementById(this.uniqueID+"Audio"),this.checkPlayerViewability=new SekindoServices.checkAdViewability(this.config,function(){SekindoUtils.firePixel(e.config.viewableImpPixel,e.config.pixelDiv,e.config)}).execute,this.checkPlayerViewability(!0);var t=function(t){var i=Math.round((Date.now()-e.config.lastViewableDurationTime)/10);if(e.config.lastViewableDurationTime=void 0==t?Date.now():0,!(i<=0||i>1e3||""==e.config.viewableDurPixel)){var n=SekindoUtils.getPlayerViewPct(e.config.playerIframeElement,window.parent),o=e.config.viewableDurPixel+"&dur="+i+"&viewPct="+JSON.stringify(n);SekindoUtils.firePixel(o,e.config.pixelDiv,e.config)}};1==this.config.onViewabilityChange.getCurrState()&&(this.config.lastViewableDurationTime=Date.now(),this.viewableDurPixelIntervalId=setInterval(t,5e3)),this.viewableDurCallbackId=this.config.onViewabilityChange.addCallback(function(i){i?(0==e.config.lastViewableDurationTime&&(e.config.lastViewableDurationTime=Date.now()),e.viewableDurPixelIntervalId&&clearInterval(e.viewableDurPixelIntervalId),e.viewableDurPixelIntervalId=setInterval(t,5e3)):(e.viewableDurPixelIntervalId&&clearInterval(e.viewableDurPixelIntervalId),t(!0))});var i=function(t){var i=Math.round((Date.now()-e.config.lastVisibleDurationTime)/10);if(e.config.lastVisibleDurationTime=void 0==t?Date.now():0,!(i<=0||i>2e3||""==e.config.playerDurPeriodsPixel)){var n=e.config.playerDurPeriodsPixel+"&dur="+i;SekindoUtils.firePixel(n,e.config.pixelDiv,e.config)}};1==this.config.onVisibilityChange.getCurrState()&&(this.config.lastVisibleDurationTime=Date.now(),this.visibleDurPixelIntervalId=setInterval(i,1e4)),this.visibleDurCallbackId=this.config.onVisibilityChange.addCallback(function(t){t?(0==e.config.lastVisibleDurationTime&&(e.config.lastVisibleDurationTime=Date.now()),e.visibleDurPixelIntervalId&&clearInterval(e.visibleDurPixelIntervalId),e.visibleDurPixelIntervalId=setInterval(i,1e4)):(e.visibleDurPixelIntervalId&&clearInterval(e.visibleDurPixelIntervalId),i(!0))}),setTimeout(function(){e.viewableDurPixelIntervalId&&clearInterval(e.viewableDurPixelIntervalId),e.visibleDurPixelIntervalId&&clearInterval(e.visibleDurPixelIntervalId),e.config.onViewabilityChange.removeCallback(e.viewableDurCallbackId),e.config.onVisibilityChange.removeCallback(e.visibleDurCallbackId)},72e5),this.config.bus.triggerNote("playerConstructed")},SekindoSPlayer.prototype.destructPlayer=function(){this.config.bus.callbacksArray=[],this.visibleDurPixelIntervalId&&clearInterval(this.visibleDurPixelIntervalId),this.viewableDurPixelIntervalId&&clearInterval(this.viewableDurPixelIntervalId),this.playlistManager&&(this.playlistManager.destruct(),delete this.playlistManager),this.debugger&&(this.debugger.destruct(),delete this.debugger),this.outStream&&(this.outStream.destruct(),delete this.outStream),this.adsManager&&(this.adsManager.destruct(),delete this.adsManager),this.config.onViewabilityChange.destruct(),this.config.onVisibilityChange.destruct(),SekindoUtils.resetAllAnimations(),this.config.currScript&&this.config.currScript.parentNode&&this.config.currScript.parentNode.removeChild(this.config.currScript),this.config.mainVideoDiv&&this.config.mainVideoDiv.parentNode&&this.config.mainVideoDiv.parentNode.removeChild(this.config.mainVideoDiv)};function LayoutDesign(externConfig, container, trigger)
{
    var ref = this;
    //SKIN MUST HAVE ELEMENTS ===>>>
    this.trigger = trigger;
    this.layoutConfig = {};
    this.layout = container;

    //Incomming events (from layoutManager to layoutDesign)
    this.noteIn =
        {
            volumeChange : 'volumeChange', //{type:'volumeChange',content:{muted:XX,volume:XX}}
            play : 'play', //{type:'play'}
            playing : 'playing', //{type:'playing',content:{player:XX}}
            pause : 'pause', //{type:'pause'}
            videoProgress : 'videoProgress', //{type:'videoProgress',content:{isSimulator:XX, currTime:XX, duration:XX, loaded:XX,}
            contentStarted : 'contentStarted', //{type:'contentStarted',content:index}
            contentEnded : 'contentEnded', //{type:'contentEnded'}
            contentSwitched: 'contentSwitched', //{type:'contentSwitched',content:index}}
            fullScreen: 'fullScreen', //{type:'fullScreen'}
            captions: 'captions', //{type:'captions',content:status} status: -1(no captions) 0(captions off) 1(captions on)
            headerTitle: 'headerTitle', //{type:'headerTitle',content:title}}
            layoutResize: 'layoutResize', //{type:'layoutResize',content:{playerSizes:{}, flowing:XX, closeBtnLocked:XX}}}
            hideLayout: 'hideLayout', //{type:'hideLayout',content:mouseEvent}}//TODO find unique solution for muse event
            exposeLayout: 'exposeLayout', //{type:'exposeLayout',content:mouseEvent}}//TODO find unique solution for muse event
            adEvent:'adEvent', //{type:'adEvent',content:{adStarted:XX, params:{controls:XX, skipTime:XX}}}
            bgCoverBtnsDisplay:'bgCoverBtnsDisplay',//{type:'bgCoverBtnsDisplay',content:boolean}
            playlistData: 'playlistData', //{type:'playlistData',content:{isLiked:XX likes:XX views:XX}}}
            hideTimeBar: 'hideTimeBar', //{type:'hideTimeBar'}
            onFlow: 'onFlow', //{type:'onFlow',content:boolean}
            calcPlayerSizes: 'calcPlayerSizes', //{type:'onFlow',content:boolean}
            hideAutoSkipContent: 'hideAutoSkipContent', //{type:'hideAutoSkipContent', content: shouldInit}
            displayAutoSkipContent: 'displayAutoSkipContent' //{type:'hideAutoSkipContent', content: skipAnimDuration}
        }

    //Outgoing note messages (from layoutDesign to layoutManager)
    this.noteOut =
        {
            onLayoutExposed: 'onLayoutExposed', //{type:'onLayoutExposed',value:boolean}
            onVideoLike: 'onVideoLike', //{type:'onLayoutExposed'}
            onTimeScrabber : 'onTimeScrabber', //{type:'onTimeScrabber',  value:percentage} percentage between 0 to 1
            onVolumeScrabber : 'onVolumeScrabber', //{type:'onVolumeScrabber',  value:percentage} percentage between 0 to 1
            onMute : 'onMute', //{type:'onMute',  value:boolean}
            onAdCover : 'onAdCover', //{type:'onAdCover',  value:mouseEvent}
            onTransparentCover : 'onTransparentCover', //{type:'onTransparentCover',  value:mouseEvent}
            onCloseBtnClick : 'onCloseBtnClick', //{type:'onCloseBtnClick'}
            onPause : 'onPause', //{type:'onPause'}
            onPlay : 'onPlay', //{type:'onPlay'}
            onNext : 'onNext', //{type:'onNext'}
            onBack : 'onBack', //{type:'onBack'}
            onSwitch : 'onSwitch', //{type:'onSwitch',  value:index}
            onTitleClick : 'onTitleClick', //{type:'onTitleClick'}
            onFullScreen : 'onFullScreen', //{type:'onFullScreen'}
            onNormalScreen : 'onNormalScreen', //{type:'onNormalScreen'}
            onLightboxClose : 'onLightboxClose', //{type:'onLightboxClose'}
            onCaption: 'onCaption', //{type:'onCaption',  value:boolean}
            onSkipAd: 'onSkipAd', //{type:'onSkipAd'}
            doRemoveChild: 'doRemoveChild', //{type:'doRemoveChild',value:{destiny:XX, visual:XX}} destiny:'layout' || 'video' || 'videoAd'   visual:the visual element (if not declared - all elements of destiny will be removed
            doFlowDrag: 'doFlowDrag', //{type:'doFlowDrag',  value:element} value: the element to be pressed for dragging
            onPrimis: 'onPrimis', //{type:'onSkipAd'}
            onShareClick: 'onShareClick', //{type:'onShareClick'}
            onSkipProgress: 'onSkipProgress', //{type:'onSkipProgress',  value: 10 || -10} skip 10 sec forward or back
            onAutoNext: 'onAutoNext', //{type:'onAutoNext'}
            onAutoSkipStay: 'onAutoSkipStay', //{type:'onAutoSkipStay'}
            onRemoveAdBreak: 'onRemoveAdBreak'
        }

    //Outgoing fetch messages (returns the requiered param or object)
    this.fetch =
        {
            adIsPlaying: 'adIsPlaying', //{type:'adIsPlaying'} returns adIsPlaying status (true || false)
            clickUrl:'clickUrl', //{type:'clickUrl'} returns config.clkUrl
            contentClickUrl:'contentClickUrl', //{type:'contentClickUrl'} returns contentClickUrl
            shareUrl: 'shareUrl', //{type:'shareUrl'} returns config.shareUrl
            viewability: 'viewability', //{type:'contentClickUrl'} returns viewabilityState (boolean)
            minLikesNum: 'minLikesNum',//{type:'minLikesNum'} return minLikesNum
            getObj: 'getObj' //{type:'getObj', value:objectId}  value may fetch config object as well: (value:'config.mainVideoDiv')
        }
    //This function enables the processor to deliver commands to the layout
    this.layoutAPI = function(val)
    {
        //Run commands from the processor
        return ref.execExternalCommands(val);
    }

    this.addConfigData = function(val)
    {
        for(var el in val)
        {
            ref.layoutConfig[el] = val[el];
        }
    }
    this.addConfigData(externConfig)

    this.createChild = function(type, parent, owner, disAppend, id)
    {
        if(parent)
        {
            owner = parent.ownerDocument;
        }
        if(!owner)
        {
            owner = document;
        }
        var obj = owner.createElement(type);
        if(parent && !disAppend)
        {
            parent.appendChild(obj)
        }
        if(id)
        {
            obj.id = id;
            this[id] = obj;
        }
        return obj;
    };

    this.constructLayout();
    this.addLayoutFunctionality();
    this.playlistDesign = new PlaylistDesign(this);
    this.autoSkipContentUI = new AutoSkipContentUI(this);
    return {api: this.layoutAPI}
}

LayoutDesign.prototype.execExternalCommands = function(val)
{
    var ref = this;
    switch(val.type)
    {
        case this.noteIn.exposeLayout:
            if(this.layoutConfig.isDesktop)
            {
                this.onExposeHideEvent(val.content);
            }
            else
            {
                this.exposeLayout(val.content);
            }
            break;
        case this.noteIn.hideLayout:
            if(this.layoutConfig.isDesktop)
            {
                this.onExposeHideEvent(val.content);
            }
            else
            {
                this.hideLayout(val.content);
            }
            break;
        case this.noteIn.layoutResize:
            this.layoutResize(val.content);
            break;
        case this.noteIn.fullScreen:
            this.setFullscreen();
            break;
        case this.noteIn.captions:
            this.onCaptions(val.content)
            break;
        case this.noteIn.headerTitle:
            this.setHeaderTitle(val.content);
            break;
        case this.noteIn.adEvent:
            this.onAdEvent(val.content);
            break;
        case this.noteIn.bgCoverBtnsDisplay:
            this.onBgCoverBtnsChange(val.content);
            break;
        case this.noteIn.playlistData:
            this.onPlaylistDataUpdate(val.content);
            break;
        case this.noteIn.hideTimeBar:
            this.progressBar.style.display = 'none';
            break;
        case this.noteIn.onFlow:
            setTimeout(ref.playlistDesign.hideUnrelevantUnits,1)
            break;
        case this.noteIn.hideAutoSkipContent:
            this.autoSkipContentUI.hideAutoSkipContent(val.content);
            break;
        case this.noteIn.displayAutoSkipContent:
            this.autoSkipContentUI.displayAutoSkipContent(val.content);
            break;

        ///Video events
        case this.noteIn.volumeChange:
            if(val.content.muted)
            {
                this.soundOffBtn.style.display = 'block';
                this.soundOnBtn.style.display = 'none';
            }
            else
            {
                this.soundOffBtn.style.display = 'none';
                this.soundOnBtn.style.display = 'block';
            }
            var calc = (val.content.volume*100) + '%';
            SekindoUtils.animateTo(this.soundScrabberMain.style, 'width', calc, 0.4, 'easeIn');
            break;
        case this.noteIn.play:
            this.hideLayout();
            if(this.layoutConfig.isShareBtn && this.trigger({type:this.fetch.shareUrl}))
            {
                this.shareContainer.style.display = 'block';
            }
            else
            {
                this.shareContainer.style.display = 'none';
            }
            break;
        case this.noteIn.playing:
            this.pauseBtn.style.display = 'block';
            this.playBtn.style.display = 'none';
            this.isPlaying = true;
            this.trigger({type:this.noteOut.onRemoveAdBreak});
            if(val.content.player != 'adsManager' && this.layoutConfig.isDesktop)
            {
                clearTimeout(this.mouseOnTimeout);
                this.mouseIsOn = false;
            }
            if (!this.layoutConfig.isDesktop)
            {
                this.layout.style.visibility =  'visible';
            }
            break;
        case this.noteIn.pause:
            this.pauseBtn.style.display = 'none';
            this.playBtn.style.display = 'block';
            this.isPlaying = false;
            break;
        case this.noteIn.videoProgress:
            if(val.content.isSimulator || this.trigger({type:ref.fetch.adIsPlaying}))return; //Do not show progress when dummy player or ad runs
            this.progressBar.onTimeEvent(val.content);
            var txt1 = SekindoUtils.secToHMS(val.content.currTime)+'/'+SekindoUtils.secToHMS(val.content.duration);
            this.progressTxt.innerHTML = txt1;
            break;
        case this.noteIn.contentStarted:
            this.playlistDesign.selectedUnit(val.content);
            break;
        case this.noteIn.contentEnded:
            this.isPlaying = false;
            break;
        case this.noteIn.contentSwitched:
            this.playlistDesign.selectedUnit(val.content);
            break;
        case this.noteIn.calcPlayerSizes:
            return this.calcPlayerSizes(val.content);
            break;

        //Get layout play svg
        case this.noteIn.getLayoutPlaySvg:
            return this.playBtnSVG;
    }
};

LayoutDesign.prototype.constructLayout = function()
{
    var ref = this;
    this.designColor = this.layoutConfig.designColor;
    this.rgbColor = ['0x' + this.designColor[1] + this.designColor[2] | 0, '0x' + this.designColor[3] + this.designColor[4] | 0, '0x' + this.designColor[5] + this.designColor[6] | 0];
    this.opacityInit = this.layoutConfig.opacityInit;
    this.isDesktop = this.layoutConfig.isDesktop;
    this.activeButtons = this.layoutConfig.activeButtons;

    this.loadDefaultFont = this.layoutConfig.loadDefaultFont;
    this.fontFamilyName = this.layoutConfig.fontFamilyName;
    this.fontFamilySize = this.layoutConfig.fontFamilySize;
    this.fontFamilyLink = this.layoutConfig.fontFamilyLink;
    this.closeBtnWidth = this.layoutConfig.closeBtnWidth;
    this.closeBtnHeight = this.layoutConfig.closeBtnHeight;
    this.clickUrlTarget = this.layoutConfig.clickUrlTarget;

    if(this.isDesktop)
    {
        this.evtType = {click:'click', mousedown:'mousedown', mouseup:'mouseup', mousemove:'mousemove', mouseenter:'mouseenter', mouseleave:'mouseleave', mouseover:'mouseover', mouseout:'mouseout'}
    }
    else
    {
        this.evtType = {click:'touchstart', mousedown:'touchstart', mouseup:'touchend', mousemove:'touchmove', mouseenter:'mouseenter', mouseleave:'touchcancel', mouseover:'mouseover', mouseout:'mouseout'}
    }

    this.layout.id = 'layoutDesign';
    this.layout.style.opacity = '1';
    this.layout.style.overflow = 'hidden';
    this.layout.style.position = "absolute";
    this.layout.style.left = '0px';
    this.layout.style.top = '0px';
    this.layout.style.width = '100%';
    this.layout.style.height = '100%';
    this.layout.style.zIndex = 111;
    this.layout.style.pointerEvents = 'none';

    //Add family font
    if(this.loadDefaultFont)
    {
        var head = this.layout.ownerDocument.getElementsByTagName('head')[0];
        var link = this.layout.ownerDocument.createElement('link');
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = this.fontFamilyLink;
        head.appendChild(link);
    }

    //All SVG elements
    var fullScreenBtnSVG = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve"> <style type="text/css">   </style>     <g>  <g fill="#fff">   <path  d="M17,17h-6v1h6v0h1v-7h-1V17z M1,11H0v7h1v0h6v-1H1V11z M17,0L17,0l-6,0v1h6v6h1V0H17z M1,0H0v7h1V1h6V0L1,0    L1,0z"/>  </g> </g> </svg>';
    var captionsOnBtnSVG = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29.1 21" style="enable-background:new 0 0 29.1 21;" xml:space="preserve"><g><g fill="#fff"><path d="M9,7c0.4-0.5,0.9-0.7,1.5-0.7c0.7,0,1.2,0.2,1.5,0.5c0.3,0.4,0.5,0.9,0.5,1.7h1.4c0-1.1-0.3-1.9-0.9-2.5 s-1.4-0.8-2.5-0.8S8.6,5.6,7.9,6.3C7.3,7,6.9,8,6.9,9.2v2.9c0,1.3,0.3,2.2,1,2.9c0.7,0.7,1.5,1,2.6,1s1.9-0.3,2.5-0.9 s0.9-1.4,0.9-2.4h-1.4c0,0.8-0.2,1.3-0.5,1.7c-0.3,0.4-0.8,0.5-1.4,0.5c-0.7,0-1.2-0.2-1.5-0.7c-0.4-0.5-0.5-1.2-0.5-2.1v-3 C8.5,8.1,8.6,7.4,9,7z"/><path d="M17.2,7c0.4-0.5,0.9-0.8,1.5-0.8c0.7,0,1.2,0.2,1.5,0.5c0.3,0.4,0.5,0.9,0.5,1.7h1.4c0-1.1-0.3-1.9-0.9-2.5 s-1.4-0.8-2.5-0.8s-1.9,0.4-2.6,1.1c-0.6,0.7-1,1.7-1,2.9V12c0,1.3,0.3,2.2,1,2.9c0.6,0.7,1.5,1,2.6,1s1.9-0.3,2.5-0.9 s0.9-1.4,0.9-2.4h-1.4c0,0.8-0.2,1.3-0.5,1.7c-0.3,0.4-0.8,0.5-1.4,0.5c-0.7,0-1.2-0.2-1.5-0.7c-0.4-0.5-0.5-1.2-0.5-2.1V9 C16.7,8.1,16.9,7.4,17.2,7z"/><path d="M0.6,2.5C0.2,2.5,0,2.7,0,3v15c0,0.3,0.2,0.5,0.5,0.5S1,18.3,1,18V3C1.1,2.7,0.9,2.5,0.6,2.5z"/><path d="M27.1,0h-25C1.7,0,1.5,0.2,1.5,0.5S1.7,1,2,1h25c0.4,0.1,0.6-0.2,0.6-0.5S27.4,0,27.1,0z"/><path d="M27.1,20h-25c-0.3,0-0.5,0.2-0.5,0.5S1.8,21,2.1,21h25c0.3,0,0.5-0.2,0.5-0.5S27.4,20,27.1,20z"/><path d="M28.6,2.5c-0.3,0-0.5,0.2-0.5,0.5v15c0,0.3,0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5V3C29.1,2.7,28.9,2.5,28.6,2.5z"/></g></g></svg>';
    var captionsOffBtnSVG = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29.1 21" style="enable-background:new 0 0 29.1 21;" xml:space="preserve"><g><g fill="#fff"><path d="M28.6,2.5c-0.3,0-0.5,0.2-0.5,0.5v15c0,0.3,0.2,0.5,0.5,0.5c0.3,0,0.5-0.2,0.5-0.5V3 C29.1,2.7,28.9,2.5,28.6,2.5z"/><path d="M0.5,2.5C0.2,2.5,0,2.7,0,3v15c0,0.3,0.2,0.5,0.5,0.5S1,18.3,1,18V3C1,2.7,0.8,2.5,0.5,2.5z"/><path d="M13.9,13.2l-2.2,2.6c0.5-0.1,1-0.4,1.3-0.7C13.5,14.6,13.8,14,13.9,13.2z"/><path d="M10.5,6.3c0.7,0,1.2,0.2,1.5,0.5c0.3,0.4,0.5,0.9,0.5,1.7h1.4c0-1.1-0.3-1.9-0.9-2.5s-1.4-0.8-2.5-0.8 S8.6,5.6,7.9,6.3C7.3,7,6.9,8,6.9,9.2v2.9c0,1.3,0.3,2.2,1,2.9c0.4,0.4,0.8,0.6,1.2,0.8l0.8-1c-0.4-0.1-0.7-0.3-0.9-0.6 c-0.4-0.5-0.5-1.2-0.5-2.1v-3C8.5,8.1,8.6,7.4,9,7C9.4,6.5,9.9,6.3,10.5,6.3z"/><path d="M21.2,5.9c-0.2-0.2-0.5-0.4-0.8-0.5l-0.8,1c0.2,0.1,0.4,0.2,0.6,0.3c0.3,0.4,0.5,0.9,0.5,1.7h1.4 C22.1,7.3,21.8,6.5,21.2,5.9z"/><path d="M18.1,5.2c-0.8,0.1-1.4,0.5-2,1c-0.5,0.6-0.9,1.5-1,2.5L18.1,5.2z"/><path d="M15.1,11.8V12c0,1.3,0.3,2.2,1,2.9c0.6,0.7,1.5,1,2.6,1c1.1,0,1.9-0.3,2.5-0.9c0.6-0.6,0.9-1.4,0.9-2.4h-1.4 c0,0.8-0.2,1.3-0.5,1.7c-0.3,0.4-0.8,0.5-1.4,0.5c-0.7,0-1.2-0.2-1.5-0.7c-0.4-0.5-0.5-1.2-0.5-2.1V9.7L15.1,11.8z"/><path d="M5.6,20H2.1c-0.3,0-0.5,0.2-0.5,0.5S1.8,21,2.1,21h3.6c-0.1-0.1-0.1-0.2-0.2-0.3C5.5,20.5,5.5,20.3,5.6,20z"/><path d="M27.1,20H8.2l-0.8,1c0,0,0,0,0,0h19.8c0.3,0,0.5-0.2,0.5-0.5S27.4,20,27.1,20z"/><path d="M27.1,0h-2.9c0,0,0.1,0.1,0.1,0.1c0.1,0.3,0.1,0.5-0.1,0.8L24.1,1h3c0.3,0,0.5-0.2,0.5-0.5S27.4,0,27.1,0z"/><path d="M2.1,1h19.5l0.8-0.9c0,0,0,0,0.1-0.1H2.1C1.8,0,1.6,0.2,1.6,0.5S1.8,1,2.1,1z"/><path d="M23.9,0.3c-0.1-0.1-0.2-0.2-0.3-0.3C23.4,0,23.3,0,23.1,0c-0.2,0-0.3,0.1-0.4,0.3L6,20.1 c-0.1,0.2-0.2,0.3-0.1,0.5c0,0.1,0.1,0.2,0.3,0.3C6.3,21,6.5,21,6.6,21c0.2,0,0.3-0.1,0.4-0.3l16.8-20C24,0.6,24,0.4,23.9,0.3z"/></g></g></svg>';
    var normalScreenBtnSVG = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve"><style type="text/css"></style><g><g fill="#fff"> <path  d="M11,11v1v6h1v-6h6v-1h-6H11z M0,11v1h6v6h1v-6v-1H6H0z M12,6V0h-1v6v1h1h6V6H12z M6,6H0v1h6h1V6V0H6V6z"/></g></g></svg>';
    var soundOnBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 489.6 489.6"><g fill="#fff"><path d="M361.1 337.6c2.2 1.5 4.6 2.3 7.1 2.3 3.8 0 7.6-1.8 10-5.2 18.7-26.3 28.5-57.4 28.5-89.9s-9.9-63.6-28.5-89.9c-3.9-5.5-11.6-6.8-17.1-2.9-5.5 3.9-6.8 11.6-2.9 17.1 15.7 22.1 24 48.3 24 75.8 0 27.4-8.3 53.6-24 75.8-3.9 5.4-2.6 13 2.9 16.9zM425.4 396.3c2.2 1.5 4.6 2.3 7.1 2.3 3.8 0 7.6-1.8 10-5.2 30.8-43.4 47.1-94.8 47.1-148.6s-16.3-105.1-47.1-148.6c-3.9-5.5-11.6-6.8-17.1-2.9-5.5 3.9-6.8 11.6-2.9 17.1 27.9 39.3 42.6 85.7 42.6 134.4 0 48.6-14.7 95.1-42.6 134.4-3.9 5.5-2.6 13.1 2.9 17.1zM254.7 415.7c4.3 2.5 9.2 3.8 14.2 3.8 7.4 0 14.4-2.8 19.7-7.9 5.6-5.4 8.7-12.6 8.7-20.4V98.5c0-15.7-12.7-28.4-28.4-28.4-4.9 0-9.8 1.3-14.2 3.8-.3.2-.6.3-.8.5l-100.1 69.2H73.3C32.9 143.6 0 176.5 0 216.9v55.6c0 40.4 32.9 73.3 73.3 73.3h84.5l95.9 69.2c.3.3.7.5 1 .7zm-92.9-94.4H73.3c-26.9 0-48.8-21.9-48.8-48.8v-55.6c0-26.9 21.9-48.8 48.8-48.8h84.3c2.5 0 4.9-.8 7-2.2l102.7-71c.5-.3 1.1-.4 1.6-.4 1.6 0 3.9 1.2 3.9 3.9v292.7c0 1.1-.4 2-1.1 2.8-.7.7-1.8 1.1-2.7 1.1-.5 0-1-.1-1.5-.3l-98.4-71.1c-2.2-1.5-4.7-2.3-7.3-2.3z"/></g></svg>';
    var soundOffBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 612 612"> <defs> <g id="Layer0_0_FILL"> <path fill="#fff" stroke="none" d=" M 371.65 292.8 L 341.1 330.45 341.1 488.8 Q 341.1 490.75 339.7 492.3 338.35 493.75 336.3 493.75 335.15 493.75 334.4 493.3 L 255.4 436.2 252.2 440.15 235.9 460.2 317.1 518.75 Q 317.8 519.35 318.35 519.6 326.7 524.4 336.15 524.4 343.15 524.4 349.45 521.85 355.8 519.3 360.75 514.5 366 509.4 368.85 502.85 371.65 496.25 371.65 489 L 371.65 292.8 M 472.75 193.65 Q 469.1 188.5 462.8 187.45 459.8009765625 186.922265625 457.05 187.5 454.0548828125 188.125390625 451.35 190.05 446.2 193.75 445.15 200 444.9408203125 201.255078125 444.9 202.45 444.8271484375 207.3259765625 447.75 211.45 462.45 232.15 470.1 256.3 477.75 280.45 477.75 306.25 477.75 312.15 477.35 318 476 337.45 470.1 356.05 462.45 380.15 447.75 401 444.1 406 445.15 412.2 446.2 418.35 451.35 422 455.6 424.95 460.25 424.95 463.9 424.95 467.2 423.3 470.55 421.55 472.75 418.45 490.25 393.8 499.35 365.2 506.6 342.25 508 318 508.35 312.05 508.35 306.05 508.35 275.55 499.25 246.95 490.2 218.35 472.75 193.65 M 361.25 98.05 Q 350.85 87.65 336.15 87.65 326.75 87.65 318.35 92.45 317.6 92.85 317.35 93.05 L 192.25 179.5 91.55 179.5 Q 72.95 179.5 55.95 186.7 39.5 193.7 26.85 206.4 14.15 219.1 7.2 235.55 0 252.55 0 271.15 L 0 340.65 Q 0 359.25 7.2 376.25 14.15 392.7 26.85 405.4 39.5 418.1 55.95 425.05 72.95 432.25 91.55 432.25 L 139.65 432.25 164.45 401.65 91.55 401.65 Q 66.4 401.65 48.45 383.75 30.55 365.85 30.55 340.65 L 30.55 271.15 Q 30.55 245.95 48.45 228.05 66.35 210.15 91.55 210.15 L 197 210.15 Q 201.6 210.15 205.8 207.35 L 334.2 118.55 Q 334.95 118.05 336.2 118.05 337.95 118.05 339.4 119.25 341.1 120.6 341.1 122.95 L 341.1 183.7 371.65 146.05 371.65 123.15 Q 371.65 108.4 361.25 98.05 M 558 127.4 Q 555.6 123.8 553.05 120.2 549.35 115.05 543.1 114 536.8 112.95 531.65 116.6 526.5 120.25 525.45 126.55 524.35 132.8 528.05 138 546 163.2 558 191.2 563.55 204.1 567.8 217.6 581.35 260.3 581.35 306 581.35 351.6 567.8 394.4 554.2 437.25 528.05 474 524.45 479.2 525.55 485.45 526.6 491.7 531.75 495.45 536 498.35 540.7 498.35 544.35 498.35 547.65 496.7 551 494.95 553.2 491.85 582 451.05 597 403.75 612 356.35 612 306 612 255.65 596.95 208.3 583.25 165.25 558 127.4 M 513.6 10.4 Q 507.15 8.05 500.5 9.7 493.1 11.55 488.8 17.85 L 37.15 574.05 Q 32.15 581.4 33.85 588.05 35.3 593.95 41.15 597.25 46.9 600.5 53.25 599.4 60.2 598.25 64.2 592.3 L 520.9 29.05 Q 524.85 23 522.3 17.65 519.95 12.75 513.6 10.4 Z"/> </g> </defs> <g transform="matrix( 1, 0, 0, 1, 0,0) "> <use xlink:href="#Layer0_0_FILL"/> </g> </svg>';
    var playBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512 512"><path fill="#fff" d="M256 0C114.617 0 0 114.615 0 256s114.617 256 256 256 256-114.615 256-256S397.383 0 256 0zm88.48 269.57l-128 80a16.008 16.008 0 0 1-16.238.422A15.994 15.994 0 0 1 192 336V176c0-5.82 3.156-11.172 8.242-13.992a15.957 15.957 0 0 1 16.238.422l128 80c4.676 2.93 7.52 8.055 7.52 13.57s-2.844 10.641-7.52 13.57z"/></svg>';
    var pauseBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 300.003 300.003"><path fill="#fff" d="M150.001 0c-82.838 0-150 67.159-150 150 0 82.838 67.162 150.003 150 150.003 82.843 0 150-67.165 150-150.003 0-82.841-67.155-150-150-150zM134.41 194.538c0 9.498-7.7 17.198-17.198 17.198s-17.198-7.7-17.198-17.198V105.46c0-9.498 7.7-17.198 17.198-17.198s17.198 7.7 17.198 17.198v89.078zm64.545 0c0 9.498-7.701 17.198-17.198 17.198-9.498 0-17.198-7.7-17.198-17.198V105.46c0-9.498 7.7-17.198 17.198-17.198s17.198 7.7 17.198 17.198v89.078z" class="active-path" data-old_color="#ffffff" data-original="#000000"/></svg>';
    var prvNxtBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 42 42"><path fill="#fff" d="M35.965.114a1.005 1.005 0 0 0-1.033.063L7.5 19.095V1a1 1 0 1 0-2 0v40a1 1 0 1 0 2 0V22.905l27.432 18.919a1.012 1.012 0 0 0 1.033.062A1 1 0 0 0 36.5 41V1a1 1 0 0 0-.535-.886z"/></svg>';
    var openTabIconSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="-22 0 512 512.00667"><path fill="#fff" d="M422.188 98.813h-44.91a8.986 8.986 0 0 0-8.985 8.984c0 4.957 4.023 8.98 8.984 8.98h44.91c14.856 0 26.95 12.09 26.95 26.95v323.367c0 14.86-12.094 26.949-26.95 26.949H98.82c-14.86 0-26.949-12.09-26.949-26.95V251.517c0-4.957-4.023-8.985-8.98-8.985-4.961 0-8.985 4.028-8.985 8.985v215.578c0 24.765 20.149 44.914 44.914 44.914h323.368c24.765 0 44.914-20.149 44.914-44.914V143.727c0-24.766-20.149-44.914-44.914-44.914zm0 0"/><path fill="#fff" d="M156.566 250.645a8.971 8.971 0 0 0 5.121-8.114v-53.894h8.985c108.531 0 156.437 53.07 198.539 138.699a8.974 8.974 0 0 0 10.094 4.789 8.98 8.98 0 0 0 6.945-8.75c0-228.938-103.613-260.492-215.578-260.492h-8.984V8.988a8.979 8.979 0 0 0-5.122-8.11 8.939 8.939 0 0 0-9.52 1.142L3.329 118.79c-2.101 1.698-3.324 4.269-3.324 6.972s1.223 5.261 3.324 6.968l143.719 116.774a8.942 8.942 0 0 0 9.52 1.14zm0 0"/></svg>'
    var primisLogoSVG = '<div id="pl1" style=" height: 15px; width: 6px;  position:absolute; top:0; left:0; pointer-events:none;"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\t viewBox="0 0 121.4 228.7" style="enable-background:new 0 0 121.4 228.7;" xml:space="preserve"><style type="text/css">\t.stlp0{fill:#FF3E5F;}</style><path class="stlp0" d="M81.9,195L75,228.8H0L46.5,0h74.9l-6.9,33.8H77.3L44.6,195H81.9z"/></svg></div><div id="primisLogoTxt" style="overflow:hidden; margin-right: 5px; position: relative; height:15px; opacity:1; pointer-events:none;"><div id="pl2" style=" height: 15px; width: 37px;  position:absolute; top:0; left:0;"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\t viewBox="0 0 762.6 228.7" style="enable-background:new 0 0 762.6 228.7;" xml:space="preserve"><style type="text/css">\t.st1{fill:#fffffe;}</style><path class="st1" d="M154.2,195H115l29.8-146.3H184l-2.4,11.5c5.4-7.8,16-12.8,29-12.8c24,0,47.4,18.8,47.4,49.4\tc0,34.9-30.8,62.4-61.9,62.4c-16.5,0-29.5-5-32-12.8L154.2,195z M192.2,124.1c13.6,0,24.5-10.8,24.5-22.7c0-11-8.5-18.8-20.6-18.8\tc-14.3,0-24.7,11-24.7,22.5C171.4,116,179.9,124.1,192.2,124.1L192.2,124.1z"/><path class="st1" d="M280.2,48.7h40.1l-2.8,13.4c8.7-12.1,18.2-16,29.9-16c4.4,0,8.9,0.4,13.2,1.2L353.4,83\tc-4.7-0.8-9.5-1.1-14.3-1.1c-17.3,0-27.9,12.6-32.3,33.1l-8.9,42.7h-40.1L280.2,48.7z"/><path class="st1" d="M374.9,48.7H415l-22.3,109.1h-40.1L374.9,48.7z M377.7,24c0-12.6,10.8-24,24.5-24c12.1,0,20.6,8.5,20.6,19.9\tc0,12.1-10.4,23.8-24.5,23.8C386.1,43.7,377.7,35.5,377.7,24L377.7,24z"/><path class="st1" d="M430.8,48.7h40.1l-2.8,13.4c8-12.1,17.1-16,27.9-16c14.3,0,24.9,6.3,29.2,16.9c9.3-11,23.1-17.2,37.4-16.9\tc21.4,0,33.6,14.1,33.6,36.2c0,3.6-0.4,7.3-1.1,10.8l-13.4,64.8h-40.1l12.3-61.1c0.2-1.4,0.4-2.9,0.4-4.3c0-7.6-3.7-12.1-10.6-12.1\tc-8.7,0-14.3,7.4-16.5,18L514.9,158H475l12.3-61.1c0.2-1.4,0.4-2.9,0.4-4.3c0-7.6-3.7-12.1-10.6-12.1c-8.7,0-14.3,6.9-16.5,17.5\tl-12.1,60h-40.1L430.8,48.7z"/><path class="st1" d="M619.7,48.7h40.1l-22.3,109.2h-40.1L619.7,48.7z M622.5,24c0-12.6,10.8-24,24.5-24c12.1,0,20.6,8.5,20.6,19.9\tc0,12.1-10.4,23.8-24.5,23.8C631,43.7,622.5,35.5,622.5,24z"/><path class="st1" d="M676.1,116.7c7.4,8.7,18.4,10.8,29.9,10.8c9.5,0,12.8-2.4,12.8-5.2c0-4.8-18.4-3.9-32.9-11\tc-11.5-5.6-17.5-14.5-17.5-26.9c0-21,20.6-39,48.9-39c16.6-0.1,32.7,5.8,45.3,16.7l-20.1,25.3c-7.4-6.7-17.1-10.4-27.1-10.4\tc-7.6,0-10.4,2.8-10.4,5.6c0,5.2,15.2,4.8,33.3,11.9c14.3,5.6,18,16.2,18,27.1c0,24.5-18.8,39.4-54.6,39.4\tc-22.7,0-40.1-7.4-50.7-19.7L676.1,116.7z"/></svg></div></div><div id="pl3" style=" height: 15px; width: 6px;  position:absolute; top:0; right:0; "><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\t viewBox="0 0 121.5 228.7" style="enable-background:new 0 0 121.5 228.7;" xml:space="preserve"><style type="text/css">\t.st2{fill:#FF3E5F;}</style><path class="st2" d="M39.6,33.7L46.5,0h74.9L75,228.7H0L7,195h37.3L76.9,33.8L39.6,33.7z"/></svg></div>';
    var flowCloseBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 768 768" enable-background="new 0 0 768 768" x="0px" y="0px" version="1.1" id="Layer_1" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"><circle fill="#backColor" opacity="circleOpacity" cx="384" cy="384" r="341"/><g><path fill="#lineColor" d="M655.5,112.5C582.9,39.9,486.6,0,384,0S185.1,39.9,112.5,112.5S0,281.4,0,384s39.9,198.9,112.5,271.5S281.4,768,384,768 s198.9-39.9,271.5-112.5S768,486.6,768,384S728.1,185.1,655.5,112.5z M624.6,624.6C560.3,689,474.8,724.4,384,724.4 S207.7,689,143.4,624.6C10.7,492,10.7,276,143.4,143.4C207.7,79,293.2,43.6,384,43.6S560.3,79,624.6,143.4 C757.3,276,757.3,492,624.6,624.6z" class="active-path" data-old_color="#A96D6D" data-original="#lineColor"/><path fill="#lineColor" d="M553.2,214.8c-8.6-8.6-22.3-8.6-30.9,0L384,353.1L245.7,214.8c-8.6-8.6-22.3-8.6-30.9,0c-8.6,8.6-8.6,22.3,0,30.9 L353.1,384L214.8,522.3c-8.6,8.6-8.6,22.3,0,30.9c4.2,4.2,9.9,6.5,15.4,6.5s11.2-2.1,15.4-6.5l138.3-138.3l138.3,138.3 c4.2,4.2,9.9,6.5,15.4,6.5c5.7,0,11.2-2.1,15.4-6.5c8.6-8.6,8.6-22.3,0-30.9L414.9,384l138.3-138.3 C561.8,237.1,561.8,223.4,553.2,214.8z"  class="active-path" data-old_color="#A96D6D" data-original="#lineColor"/></g></svg>';
    var lightboxCloseBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 475.2 475.2"><path fill="#fff" d="M405.6 69.6C360.7 24.7 301.1 0 237.6 0s-123.1 24.7-168 69.6S0 174.1 0 237.6s24.7 123.1 69.6 168 104.5 69.6 168 69.6 123.1-24.7 168-69.6 69.6-104.5 69.6-168-24.7-123.1-69.6-168zm-19.1 316.9c-39.8 39.8-92.7 61.7-148.9 61.7s-109.1-21.9-148.9-61.7c-82.1-82.1-82.1-215.7 0-297.8C128.5 48.9 181.4 27 237.6 27s109.1 21.9 148.9 61.7c82.1 82.1 82.1 215.7 0 297.8z" class="active-path" data-old_color="#A96D6D" data-original="#000000"/><path fill="#fff" d="M342.3 132.9c-5.3-5.3-13.8-5.3-19.1 0l-85.6 85.6-85.6-85.6c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l85.6 85.6-85.6 85.6c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l85.6-85.6 85.6 85.6c2.6 2.6 6.1 4 9.5 4 3.5 0 6.9-1.3 9.5-4 5.3-5.3 5.3-13.8 0-19.1l-85.4-85.6 85.6-85.6c5.3-5.3 5.3-13.8 0-19.1z" class="active-path" data-old_color="#A96D6D" data-original="#000000"/></svg>';
    var liveIcoSVG = '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101.43 34.65"><defs><style>.clsx-1{isolation:isolate;}.clsx-2{fill:#ff3e5f;}.clsx-3{fill:#fff;}</style></defs><g id="_Live_1" data-name=" Live 1"><g class="clsx-1"><path class="clsx-2" d="M486.72,381l-.94,4.81H474.33l6.73-34.65h11.45l-.94,4.81h-6.12l-4.86,25Z" transform="translate(-474.33 -351.15)"></path></g><g class="clsx-1"><path class="clsx-3" d="M495,357.71h5.44l-3.09,15.89h8.47l-1,4.92H490.92Z" transform="translate(-474.33 -351.15)"/><path class="clsx-3" d="M511.32,359.73h5.56l-3.65,18.8h-5.56Zm.51-4.74a4,4,0,0,1,3.79-3.17,2.52,2.52,0,0,1,2.55,3.17,4,4,0,0,1-3.78,3.13A2.53,2.53,0,0,1,511.83,355Z" transform="translate(-474.33 -351.15)"/><path class="clsx-3" d="M518.82,359.73h5.63l2.6,11.94,7.21-11.94h5.63l-11.71,18.8h-5Z" transform="translate(-474.33 -351.15)"/><path class="clsx-3" d="M537.81,369.09a12.07,12.07,0,0,1,12.09-9.85c5.82,0,8.83,4.25,7.8,9.55,0,0-.18.93-.42,1.79H543.08c-.32,2.24,1.33,3.69,4.28,3.69a7.41,7.41,0,0,0,4.94-1.83l2.64,3.1a12.91,12.91,0,0,1-8.76,3.43c-6.12,0-9.55-3.84-8.4-9.73ZM552.47,367c.33-1.72-1.22-3.13-3.46-3.13-2.42,0-4.67,1.38-5.16,3.13Z" transform="translate(-474.33 -351.15)"></path></g><path class="clsx-2" d="M564.63,381l4.86-25h-6.12l.94-4.81h11.45L569,385.8H557.58l.94-4.81Z" transform="translate(-474.33 -351.15)"></path></g></svg>';
    var shareBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 481.6 481.6"><path fill="#fff" d="M381.6 309.4c-27.7 0-52.4 13.2-68.2 33.6l-132.3-73.9c3.1-8.9 4.8-18.5 4.8-28.4 0-10-1.7-19.5-4.9-28.5l132.2-73.8c15.7 20.5 40.5 33.8 68.3 33.8 47.4 0 86.1-38.6 86.1-86.1S429 0 381.5 0s-86.1 38.6-86.1 86.1c0 10 1.7 19.6 4.9 28.5l-132.1 73.8c-15.7-20.6-40.5-33.8-68.3-33.8-47.4 0-86.1 38.6-86.1 86.1s38.7 86.1 86.2 86.1c27.8 0 52.6-13.3 68.4-33.9l132.2 73.9c-3.2 9-5 18.7-5 28.7 0 47.4 38.6 86.1 86.1 86.1s86.1-38.6 86.1-86.1-38.7-86.1-86.2-86.1zm0-282.3c32.6 0 59.1 26.5 59.1 59.1s-26.5 59.1-59.1 59.1-59.1-26.5-59.1-59.1 26.6-59.1 59.1-59.1zM100 299.8c-32.6 0-59.1-26.5-59.1-59.1s26.5-59.1 59.1-59.1 59.1 26.5 59.1 59.1-26.6 59.1-59.1 59.1zm281.6 154.7c-32.6 0-59.1-26.5-59.1-59.1s26.5-59.1 59.1-59.1 59.1 26.5 59.1 59.1-26.5 59.1-59.1 59.1z"/></svg>';
    var emailBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 483.3 483.3"><g fill="#fff"><path d="M424.3 57.75H59.1c-32.6 0-59.1 26.5-59.1 59.1v249.6c0 32.6 26.5 59.1 59.1 59.1h365.1c32.6 0 59.1-26.5 59.1-59.1v-249.5c.1-32.6-26.4-59.2-59-59.2zm32.1 308.7c0 17.7-14.4 32.1-32.1 32.1H59.1c-17.7 0-32.1-14.4-32.1-32.1v-249.5c0-17.7 14.4-32.1 32.1-32.1h365.1c17.7 0 32.1 14.4 32.1 32.1v249.5h.1z"/><path d="M304.8 238.55l118.2-106c5.5-5 6-13.5 1-19.1-5-5.5-13.5-6-19.1-1l-163 146.3-31.8-28.4c-.1-.1-.2-.2-.2-.3-.7-.7-1.4-1.3-2.2-1.9L78.3 112.35c-5.6-5-14.1-4.5-19.1 1.1-5 5.6-4.5 14.1 1.1 19.1l119.6 106.9-119.1 111.5c-5.4 5.1-5.7 13.6-.6 19.1 2.7 2.8 6.3 4.3 9.9 4.3 3.3 0 6.6-1.2 9.2-3.6l120.9-113.1 32.8 29.3c2.6 2.3 5.8 3.4 9 3.4s6.5-1.2 9-3.5l33.7-30.2 120.2 114.2c2.6 2.5 6 3.7 9.3 3.7 3.6 0 7.1-1.4 9.8-4.2 5.1-5.4 4.9-14-.5-19.1l-118.7-112.7z"/></g></svg>';
    var facebookBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="-110 1 511 511.99996"><path fill="#fff" d="M180 512H98.008c-13.695 0-24.836-11.14-24.836-24.836V302.227H25.336C11.64 302.227.5 291.082.5 277.39v-79.246c0-13.696 11.14-24.836 24.836-24.836h47.836v-39.684c0-39.348 12.355-72.824 35.726-96.805C132.375 12.73 165.184 0 203.778 0l62.53.102c13.672.023 24.794 11.164 24.794 24.835v73.579c0 13.695-11.137 24.836-24.829 24.836l-42.101.015c-12.84 0-16.11 2.574-16.809 3.363-1.152 1.31-2.523 5.008-2.523 15.223v31.352h58.27c4.386 0 8.636 1.082 12.288 3.12 7.88 4.403 12.778 12.727 12.778 21.723l-.031 79.247c0 13.687-11.141 24.828-24.836 24.828h-58.47v184.941C204.84 500.86 193.696 512 180 512zm-76.813-30.016h71.633V288.79c0-9.144 7.442-16.582 16.582-16.582h66.727l.027-68.883h-66.758c-9.14 0-16.578-7.437-16.578-16.582v-44.789c0-11.726 1.192-25.062 10.043-35.086 10.696-12.117 27.551-13.515 39.301-13.515l36.922-.016V30.109l-57.332-.093c-62.024 0-100.566 39.703-100.566 103.609v53.117c0 9.14-7.438 16.582-16.579 16.582H30.516v68.883h56.093c9.141 0 16.579 7.438 16.579 16.582zM266.25 30.117h.004zm0 0"/></svg>';
    var linkedinBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 510 510">  <path fill="#fff" stroke="none" d=" M 29.4 170.55 Q 25.0033203125 174.9400390625 25 181.15 L 25 478.95 Q 25.0033203125 485.1599609375 29.4 489.55 33.7900390625 493.9466796875 40 493.95 L 132.7 493.95 Q 138.9099609375 493.9466796875 143.3 489.55 147.6966796875 485.1599609375 147.7 478.95 L 147.7 181.15 Q 147.6966796875 174.9400390625 143.3 170.55 138.9099609375 166.1533203125 132.7 166.15 L 40 166.15 Q 33.7900390625 166.1533203125 29.4 170.55 M 55 196.15 L 117.7 196.15 117.7 463.95 55 463.95 55 196.15 M 134.85 38.35 L 134.85 38.35 Q 114.7173828125 18.1341796875 86.3 18.15 57.823828125 18.1466796875 37.7 38.35 L 37.7 38.35 Q 17.70234375 58.46015625 17.7 86.85 17.694921875 115.2359375 37.7 135.35 L 37.7 135.4 Q 57.82109375 155.55390625 86.3 155.55 114.702734375 155.55390625 134.85 135.4 L 134.85 135.4 Q 154.954296875 115.2505859375 154.95 86.85 154.9470703125 58.4404296875 134.85 38.35 M 113.6 59.55 L 113.65 59.55 Q 124.9529296875 70.8595703125 124.95 86.85 124.9453125 102.8494140625 113.6 114.2 L 113.65 114.2 Q 102.297265625 125.54609375 86.3 125.55 70.296875 125.54609375 59 114.2 L 58.95 114.2 Q 47.7052734375 102.846484375 47.7 86.85 47.69765625 70.857421875 58.95 59.55 L 59 59.5 Q 70.2935546875 48.1533203125 86.3 48.15 102.2828125 48.166015625 113.6 59.55 M 366.55 287.35 L 366.55 287.35 Q 369.8208984375 295.9189453125 370.95 308.6 371.6982421875 317.625 371.7 334.2 L 371.7 479.05 Q 371.7033203125 485.2599609375 376.1 489.65 380.4900390625 494.0466796875 386.7 494.05 L 479.35 494.05 Q 485.5599609375 494.0466796875 489.95 489.65 494.3466796875 485.2599609375 494.35 479.05 L 494.35 315.75 Q 494.346484375 281.159765625 489.9 257 484.36796875 226.735546875 471.6 206.7 442.5888671875 158.8494140625 368.25 158.85 332.56171875 158.936328125 304.3 176.4 L 304.3 176.35 Q 299.108203125 179.589453125 294.45 183.15 L 294.45 181.15 Q 294.4466796875 174.9400390625 290.05 170.55 285.6599609375 166.1533203125 279.45 166.15 L 190.75 166.15 Q 184.5400390625 166.1533203125 180.15 170.55 175.7533203125 174.9400390625 175.75 181.15 L 175.75 479.05 Q 175.7533203125 485.2599609375 180.15 489.65 184.5400390625 494.0466796875 190.75 494.05 L 283.15 494.05 Q 289.3599609375 494.0466796875 293.75 489.65 298.1466796875 485.2599609375 298.15 479.05 L 298.15 331.75 Q 298.1484375 301.451171875 305.95 286.25 L 306 286.2 Q 315.576171875 270.294921875 338.65 270.3 359.621484375 269.85 366.55 287.35 M 446.2 222.7 Q 456.0318359375 238.5634765625 460.4 262.4 464.353515625 284.340625 464.35 315.75 L 464.35 464.05 401.7 464.05 401.7 334.2 Q 401.7017578125 315.975 400.85 306.05 L 400.85 306 Q 399.27265625 288.264453125 394.45 276.35 L 394.45 276.3 Q 380.37734375 240.7470703125 338.65 240.3 296.2140625 240.305078125 279.7 271.75 L 279.7 271.75 Q 268.1515625 291.6453125 268.15 331.75 L 268.15 464.05 205.75 464.05 205.75 196.15 264.45 196.15 264.45 221.9 Q 264.4533203125 228.1099609375 268.85 232.5 273.2400390625 236.8966796875 279.45 236.9 L 280.65 236.9 Q 284.8103515625 236.90390625 288.35 234.75 291.9462890625 232.5927734375 293.9 228.9 302.626171875 212.6734375 320.05 201.9 L 320.05 201.9 Q 341.3384765625 188.7634765625 368.25 188.85 423.7208984375 188.8505859375 446.2 222.7 Z"/> </svg> ';
    var pinterestBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 520"> <path fill="#fff" stroke="none" d=" M 340.95 115.95 L 341 115.95 Q 366.8947265625 141.594921875 366.9 183.05 366.915234375 211.75390625 360.8 237.75 354.941796875 262.813671875 344.05 281.85 L 344 281.9 Q 333.6970703125 299.9265625 319.95 309.8 L 319.9 309.8 Q 306.843359375 319.0630859375 291.8 319.15 276.2375 319.3591796875 267 308.4 L 266.95 308.35 Q 258.0572265625 297.5625 261.55 282.85 L 261.55 282.8 Q 264.0701171875 272.1232421875 268.85 256.55 L 268.8 256.55 Q 274.4572265625 238.3400390625 277.05 229.6 L 277.05 229.55 Q 287.273828125 195.3291015625 287.05 178.6 287.04765625 154.2626953125 274.2 139.05 L 274.2 139 Q 259.7958984375 120.948046875 233.7 120.95 203.5919921875 120.5439453125 182.95 147.95 L 182.9 147.95 Q 163.8544921875 172.7755859375 163.85 209.55 163.86328125 228.55703125 169 246.3 L 169 246.35 Q 170.6 251.8517578125 172.2 255.95 L 136.75 406 136.75 406 Q 129.925 434.76171875 131.35 475.2 131.394921875 476.27890625 131.6 477.4 136.5583984375 504.404296875 152.8 508.05 166.89921875 515.028515625 189.1 498.8 191.389453125 497.1279296875 192.9 494.7 215.4203125 459.2328125 223.35 429.8 L 223.35 429.8 Q 225.5431640625 421.843359375 234.7 385.7 L 234.65 385.75 236.6 378.25 Q 242.115234375 382.219140625 248.75 385.75 L 248.8 385.75 Q 272.2091796875 398.1158203125 298.3 398.1 335.6607421875 398.0712890625 367.6 381.65 367.625 381.6623046875 367.65 381.65 398.4412109375 366.0109375 421.1 336.7 443.12890625 308.362890625 454.85 270.2 466.613671875 232.165625 466.65 188.35 466.666796875 153.6826171875 452.5 121.3 L 452.5 121.35 Q 438.5078125 89.2806640625 412.7 64.5 386.191796875 39.1021484375 351.05 25.2 314.0994140625 10.583984375 271.65 10.55 220.0044921875 10.5455078125 177.2 28.05 137.6974609375 44.1279296875 108.65 73.55 L 108.7 73.55 Q 81.7677734375 100.7685546875 67.35 135.6 L 67.35 135.55 Q 53.3587890625 169.0849609375 53.4 203.15 53.3939453125 245.4220703125 69.25 276.45 L 69.25 276.45 Q 87.139453125 311.978515625 120.9 325.6 L 120.8 325.6 Q 132.50859375 330.494140625 141.95 325.4 L 142 325.35 Q 152.0927734375 321.062109375 155.3 308.35 L 155.35 308.3 Q 159.7423828125 290.978125 161.1 285.65 161.11328125 285.6248046875 161.1 285.55 163.7869140625 275.45 161.7 269.65 L 161.7 269.7 Q 160.8388671875 264.51171875 153.95 256.35 146.6896484375 247.687109375 142.95 237.3 L 142.95 237.25 Q 138.7033203125 225.1880859375 138.7 210.25 138.6919921875 186.1400390625 147.4 164.15 156.05078125 142.311328125 172.1 125.65 L 172.05 125.65 Q 188.7466796875 108.4470703125 211.15 99.1 L 211.15 99.1 Q 235.3005859375 89.054296875 263.65 89.1 312.636328125 89.1048828125 340.95 115.95 M 361.9 94.45 L 361.9 94.4 Q 326.141796875 59.094921875 263.65 59.1 229.098828125 59.1458984375 199.65 71.4 L 199.6 71.4 Q 171.452734375 83.152734375 150.5 104.8 L 150.5 104.8 Q 130.3490234375 125.688671875 119.5 153.1 108.7078125 180.359765625 108.7 210.25 108.6966796875 230.8119140625 114.7 247.4 L 114.7 247.4 Q 120.2103515625 262.812890625 131 275.65 132.08984375 276.9224609375 132.7 277.35 L 132.7 277.4 Q 132.23984375 277.4806640625 132.1 278 L 132.05 278.1 Q 130.9310546875 282.5537109375 127.55 295.7 107.378125 285.471875 96.05 262.95 L 96.05 262.9 Q 83.4060546875 237.577734375 83.4 203.15 83.44140625 174.9146484375 95.05 147.1 L 95.05 147.05 Q 107.23203125 117.6318359375 130 94.65 L 130 94.65 Q 154.801953125 69.5720703125 188.5 55.85 226.1953125 40.554296875 271.65 40.55 308.2 40.515625 340 53.1 369.607421875 64.7974609375 391.95 86.15 413.3921875 106.719140625 425 133.35 L 425 133.35 Q 436.6330078125 159.9173828125 436.65 188.35 436.6861328125 227.4341796875 426.2 261.35 416.1708984375 294.0369140625 397.4 318.35 378.9775390625 342.1642578125 354 354.9 L 353.95 354.95 Q 328.31015625 368.1287109375 298.3 368.1 279.590625 368.0841796875 262.8 359.2 L 262.8 359.25 Q 248.23359375 351.52578125 242.15 340.75 240.01015625 336.640625 235.9 334.45 231.778125 332.262890625 227.15 332.8 222.568359375 333.3482421875 219.05 336.4 215.540625 339.491015625 214.35 343.95 L 205.6 378.3 205.6 378.35 Q 196.5568359375 414.055859375 194.4 421.9 L 194.4 421.85 Q 187.5673828125 446.5330078125 169.15 476.15 164.917578125 479.0849609375 162.8 479.75 162.223828125 477.9609375 161.3 473.15 160.1587890625 437.973828125 165.95 412.85 L 202.55 258 Q 203.8064453125 252.7384765625 201.35 247.85 199.6349609375 244.2423828125 197.8 237.95 L 197.8 237.95 Q 193.8365234375 224.242578125 193.85 209.55 193.8453125 183.644921875 206.85 166.05 L 206.85 166 Q 217.9248046875 151.3541015625 233.7 150.95 244.7080078125 150.951953125 251 158.05 L 250.95 158 Q 257.0521484375 166.033984375 257.05 178.6 256.8263671875 192.469921875 248.3 221 L 248.3 221 Q 245.7427734375 229.6599609375 240.15 247.7 L 240.15 247.75 Q 235.0298828125 264.476953125 232.35 275.95 225.2498046875 305.946875 244.1 327.8 L 244.1 327.75 Q 261.9630859375 348.94140625 291.8 349.15 316.1564453125 349.2369140625 337.25 334.3 L 337.25 334.3 Q 356.102734375 321.1734375 370.05 296.8 L 370.05 296.8 Q 383.0583984375 274.2859375 390 244.6 396.884765625 215.3458984375 396.9 183.05 396.9052734375 128.1248046875 361.9 94.45 Z"/></svg> ';
    var whatsappBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 520"> <path fill="#fff" stroke="none" d=" M 438.75 79.25 Q 404.5 45 360.1 26.25 314.15 6.8 263.8 6.8 213.45 6.8 167.45 26.25 123.1 45 88.8 79.25 54.55 113.5 35.8 157.9 16.35 203.85 16.35 254.2 16.35 288.75 25.65 321.65 34.7 353.6 51.85 381.95 52.2 382.5 52.3 383.15 L 52.3 383.2 Q 52.35 383.8 52.15 384.45 L 8.8 513.25 141.8 470.7 Q 142.35 470.5 143 470.55 143.6 470.6 144.15 470.9 171.15 485.85 200.95 493.65 231.65 501.65 263.7 501.65 314.05 501.65 360.05 482.2 404.45 463.45 438.75 429.15 473 394.9 491.75 350.5 511.2 304.55 511.2 254.2 511.2 203.85 491.75 157.9 473 113.5 438.75 79.25 M 413.3 104.8 Q 442.55 134.05 458.65 172 475.3 211.3 475.3 254.25 475.25 297.2 458.6 336.45 442.5 374.4 413.2 403.7 383.95 432.95 346 449.05 306.7 465.7 263.8 465.7 232.1 465.7 202.05 456.5 173.6 447.8 148.65 431.5 L 69.9 456.7 69.95 456.7 Q 68.85 457.05 67.8 456.6 L 67.75 456.6 Q 66.7 456.1 66.25 455.05 65.8 454 66.15 452.9 L 91.65 376.95 Q 72.95 350.85 62.95 320.5 52.3 288.4 52.3 254.25 52.3 211.3 68.95 172 85.05 134.05 114.35 104.8 143.6 75.5 181.55 59.4 220.85 42.75 263.8 42.75 306.75 42.75 346.05 59.4 384 75.5 413.3 104.8 M 338.3 288.7 Q 333.05 286.65 330.55 286.85 326.85 287.15 323.8 291.45 320.8 295.6 312.95 304.4 306.5 311.65 302.55 315.7 299.65 318.8 296.55 319.1 293.4 319.35 288.7 316.85 278.9 312.4 270.05 307.25 253.3 297.45 238.5 283.2 226.65 271.8 215.95 256.2 209.85 247.25 204.55 237.6 202.2 233.25 203.65 229.85 204.55 227.7 207.85 224.7 209.75 222.95 212.75 219.6 216.2 215.75 217.85 213.9 220 211.55 221.65 208.95 221.7 208.9 224.7 203.55 227.45 198.55 224.55 192.35 223.45 190.05 206.7 144.15 203.55 135.75 199.3 133.7 198 133.1 192.7 132.95 190.75 132.9 186.8 132.5 182.5 132.05 180.5 131.95 176.6 131.75 172.5 133.25 167.3 135.15 163.2 139.35 153.35 149.3 149.15 156.1 139.55 171.65 138.8 191.85 138.05 211.7 149.05 235.5 154.5 247.35 162.4 258.95 163.15 260.05 171.15 272.6 181.05 287.2 192.35 300.4 227.85 342 268 359.55 308.9 377.45 325.65 379.75 331.35 380.5 336.25 379.7 343.6 378.5 344.1 378.45 354.05 377.95 368.45 369.35 384.3 359.9 388.4 349.65 392.4 339.65 393.65 330.05 394.65 321.9 393.3 319.45 392.25 317.45 389 315.45 384.35 312.85 381.2 311.1 343.7 290.85 338.3 288.7 Z"/> </svg> ';
    var twitterBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 511.999 511.999">    <path fill="#fff" d="M509.738 109.538a15.263 15.263 0 0 0-14.332-7.215l-25.53 2.224 24.403-49.193a15.268 15.268 0 1 0-20.393-20.498l-64.587 31.631c-39.903-21.066-89.756-14.813-124.06 16.436-28.63 26.08-43.679 66.187-40.873 106.183-74.829-7.5-138.169-50.331-175.623-119.537a15.269 15.269 0 0 0-25.7-1.817c-23.23 31.382-24.86 74.41-6.649 109.809-5.02-1.268-10.362-2.984-16.286-4.963A15.266 15.266 0 0 0 .205 189.564c7.206 43.688 32.682 77.264 72.926 97.138a128.229 128.229 0 0 1-16.024 4.44 15.267 15.267 0 0 0-8.034 25.378c28.981 30.978 70.845 46.225 100.581 53.539-33.81 26.477-70.307 30.908-123.341 29.087-6.139-.186-11.795 3.272-14.376 8.837a15.27 15.27 0 0 0 2.544 16.681c22.108 24.369 102.654 51.847 187.326 53.907 3.349.081 6.765.125 10.253.125 59.451-.001 138.022-12.745 194.419-69.142 42.687-42.686 69.387-91.827 79.356-146.053 8.052-43.797 2.963-78.869.518-95.725-.18-1.239-.372-2.554-.528-3.704l23.881-38.49a15.267 15.267 0 0 0 .032-16.044zm-53.606 62.622c4.531 31.224 18.316 126.24-71.245 215.801-52.06 52.059-127.888 61.407-182.338 60.084-46.461-1.13-88.019-10.016-118.139-20.15 12.229-1.5 23.127-3.814 33.414-7.011 28.359-8.815 52.317-24.676 75.395-49.915a15.268 15.268 0 0 0-9.327-25.447c-14.559-1.866-58.305-9.23-92.753-32.992 9.927-4.06 19.501-9.141 28.643-15.205a15.27 15.27 0 0 0-4.569-27.494c-28.195-7.392-62.223-23.932-77.914-60.855 10.02 1.756 20.915 2.181 32.535-.424a15.268 15.268 0 0 0 7.645-25.504c-19.524-20.222-26.825-49.364-20.561-74.301 20.514 29.981 46.503 55.213 76.279 73.868 38.091 23.865 82.549 37.054 128.57 38.137a15.32 15.32 0 0 0 12.157-5.573 15.27 15.27 0 0 0 3.107-13.007c-7.918-35.595 3.375-73.541 28.771-96.674 26.34-23.995 65.269-27.635 94.666-8.846a15.27 15.27 0 0 0 14.938.846l31.541-15.448-16.509 33.281a15.265 15.265 0 0 0 1.065 15.388 15.252 15.252 0 0 0 13.938 6.607l22.242-1.937-10.246 16.515c-3.439 5.543-2.726 10.461-1.305 20.256z"/></svg>';
    var likeBtnSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 850 768" style="pointer-events: none;"> <path fill="#fff" d="M775.9,522.1c15.7-20.1,23.3-41.6,22.3-63.8c-1-24.4-11.9-43.5-20.9-55.2c10.4-26,14.5-67-20.4-98.8c-25.5-23.3-68.9-33.7-129-30.8c-42.2,1.9-77.6,9.8-79,10.1h-0.2c-8,1.4-16.5,3.2-25.2,5.1c-0.6-10.3,1.1-35.8,20.1-93.3c22.5-68.4,21.2-120.8-4.2-155.8C512.8,2.9,470.2,0,457.7,0c-12,0-23.1,5-31,14.1c-17.8,20.7-15.7,58.9-13.5,76.6c-21.2,56.9-80.6,196.3-130.9,235c-1,0.6-1.8,1.4-2.6,2.2c-14.8,15.6-24.7,32.4-31.5,47.2c-9.5-5.1-20.2-8-31.8-8h-98c-36.9,0-66.8,30-66.8,66.8v261c0,36.9,30,66.8,66.8,66.8h98c14.3,0,27.6-4.5,38.5-12.2l37.7,4.5c5.8,0.8,108.6,13.8,214.1,11.7c19.1,1.4,37.1,2.2,53.8,2.2c28.7,0,53.8-2.2,74.7-6.7c49.1-10.4,82.7-31.3,99.7-62c13-23.4,13-46.7,10.9-61.5c32-28.9,37.6-60.9,36.5-83.4C781.8,541.4,778.9,530.3,775.9,522.1L775.9,522.1z M118.5,718.4c-13,0-23.4-10.6-23.4-23.4V433.8c0-13,10.6-23.4,23.4-23.4h98c13,0,23.4,10.6,23.4,23.4v261c0,13-10.6,23.4-23.4,23.4h-98V718.4L118.5,718.4z M734.8,503.3c-6.7,7.1-8,17.8-2.9,26.2c0,0.2,6.6,11.4,7.4,26.8c1.1,21-9,39.7-30.2,55.6c-7.5,5.8-10.6,15.7-7.4,24.7c0,0.2,6.9,21.4-4.3,41.4c-10.8,19.3-34.7,33.1-71,40.8c-29.1,6.3-68.6,7.4-117.1,3.5H507c-103.3,2.2-207.7-11.2-208.8-11.4h-0.2l-16.2-1.9c1-4.5,1.4-9.3,1.4-14.1V433.8c0-6.9-1.1-13.7-3.1-19.9c2.9-10.8,10.9-34.7,29.9-55.1c72.1-57.2,142.6-250.1,145.7-258.4c1.3-3.4,1.6-7.1,1-10.8c-2.7-18-1.8-40,2.1-46.6c8.5,0.2,31.5,2.6,45.3,21.7c16.4,22.6,15.7,63.1-1.9,116.8c-27,81.7-29.2,124.8-7.9,143.7c10.6,9.5,24.7,10,35,6.3c9.8-2.2,19.1-4.2,27.9-5.6c0.6-0.2,1.4-0.3,2.1-0.5C608.7,314.6,697,308,727.7,336c26,23.8,7.5,55.2,5.5,58.6c-5.9,9-4.2,20.7,3.9,27.9c0.2,0.2,17,16.1,17.8,37.4C755.5,474.3,748.7,488.9,734.8,503.3L734.8,503.3z"></path> <path fill="#000" fill-opacity="0" d="M118.5,718.4c-13,0-23.4-10.6-23.4-23.4V433.8c0-13,10.6-23.4,23.4-23.4h98c13,0,23.4,10.6,23.4,23.4v261c0,13-10.6,23.4-23.4,23.4h-98V718.4L118.5,718.4z M734.8,503.3c-6.7,7.1-8,17.8-2.9,26.2c0,0.2,6.6,11.4,7.4,26.8c1.1,21-9,39.7-30.2,55.6c-7.5,5.8-10.6,15.7-7.4,24.7c0,0.2,6.9,21.4-4.3,41.4c-10.8,19.3-34.7,33.1-71,40.8c-29.1,6.3-68.6,7.4-117.1,3.5H507c-103.3,2.2-207.7-11.2-208.8-11.4h-0.2l-16.2-1.9c1-4.5,1.4-9.3,1.4-14.1V433.8c0-6.9-1.1-13.7-3.1-19.9c2.9-10.8,10.9-34.7,29.9-55.1c72.1-57.2,142.6-250.1,145.7-258.4c1.3-3.4,1.6-7.1,1-10.8c-2.7-18-1.8-40,2.1-46.6c8.5,0.2,31.5,2.6,45.3,21.7c16.4,22.6,15.7,63.1-1.9,116.8c-27,81.7-29.2,124.8-7.9,143.7c10.6,9.5,24.7,10,35,6.3c9.8-2.2,19.1-4.2,27.9-5.6c0.6-0.2,1.4-0.3,2.1-0.5C608.7,314.6,697,308,727.7,336c26,23.8,7.5,55.2,5.5,58.6c-5.9,9-4.2,20.7,3.9,27.9c0.2,0.2,17,16.1,17.8,37.4C755.5,474.3,748.7,488.9,734.8,503.3L734.8,503.3z"></path> </svg>';
    var viewsLogoSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 511.999 511.999"> <path fill="#fff" d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z"/> <path fill="#fff" d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z"/> </svg>';
    var skipProgressBtnSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" enable-background="new 0 0 512.004 512.004" viewBox="0 0 512.004 512.004"><path fill="#fff" d="M464.004 98.346h-368v32h368c14.544 0 15.92 15.92 16 20.688v128c0 3.072-.448 7.152-2.608 9.056-2.816 2.496-8.784 2.624-11.072 2.416-.768-.096-1.552-.16-2.32-.16H54.628l68.688-68.688-22.624-22.624-96 96c-6.256 6.256-6.256 16.368 0 22.624l96 96 22.624-22.624-68.688-68.688h408.464c1.168.112 2.896.24 5.024.24 7.536 0 20.064-1.52 30.144-10.224 6.272-5.424 13.744-15.6 13.744-33.328v-128c0-21.168-12.784-52.688-48-52.688z"/></svg>';

    this.playBtnSVG = playBtnSVG; //For usage in playlist thumbs

    // apply theme to flowCloseBtnSVG
    var flowCloseBtnLineColor = !!this.layoutConfig.closeBtnTheme.lineColor ? this.layoutConfig.closeBtnTheme.lineColor : '#000000';
    var flowCloseBtnBackColor = !!this.layoutConfig.closeBtnTheme.backColor ? this.layoutConfig.closeBtnTheme.backColor : '#FFFFFF';
    var flowCloseBtnOpacity = !!this.layoutConfig.closeBtnTheme.opacity ? this.layoutConfig.closeBtnTheme.opacity : '0.25';

    flowCloseBtnSVG = flowCloseBtnSVG.replace(/#lineColor/g, flowCloseBtnLineColor);
    flowCloseBtnSVG = flowCloseBtnSVG.replace(/#backColor/g, flowCloseBtnBackColor);
    flowCloseBtnSVG = flowCloseBtnSVG.replace('circleOpacity', flowCloseBtnOpacity);

    /**
     * Contains all relevant elements that change color on hover
     */
    this.hoverColorArray = [];

    /**
     * Contains all elements that holds the layout exposed when they are hover
     */
    this.exposeHoldersArray = [];

    /**
     * Contains all relevant elements animation changes when layout is displayed or hidden. every element contains an object with the following params:
     * {element: the element to be effected (element.style)
     * ,unit: the style unit that changes will effect ('opacity')
     * ,onDest: the destany when layout is "on" ('1')
     * ,offDest: the destany when layout is "off" ('0')
     * ,onStart: a function that will apply when animation of layout "on" starts (function(){element.style.display = 'block';}
     * ,offComplete:  a function that will apply when animation of layout "off" completes function(){element.style.display = 'none';}}
     * example: {element:this.transparentCover.style,unit:'opacity', onDest:'1', offDest:'0', onStart:function(){centerElements.style.display = 'block';}, offComplete:function(){centerElements.style.display = 'none';}}
     */
    this.displayArray = [];

    /**
     * Contains all relevant elements changes when player resizes. every element contains an object with the following params:
     * {obj:  the element to be effected (element) - must be the first obj in the list
     * , followed by the uint to be changed (left:) and an array of 2 values ['19px','13px'] - first value for the big layout and second for the small}
     * example: {obj:publisherLogo, left:['19px','13px'],top:['14px','10px'],transform:['translate(50%, 50%) scale(2','translate(0%, 0%) scale(1)']}
     */
    this.resizersArray = [];

    /**
     * Contains all relevant elements changes when ad is displayed or hidden. every element contains an object with the following params:
     * {element: the element to be effected (element.style)
     * ,unit: the style unit that changes will effect ('opacity')
     * ,onDest: the destany when layout is "on" ('1')
     * ,offDest: the destany when layout is "off" ('0')
     * example: {element:this.transparentCover.style,unit:'display', onDest:'block', offDest:'none'}
     */
    this.adDisplayArray = [];

    /**
     * Contains all relevant elements to show when BgCover (autoplay 4) is displayed. every element contains an object with the following params:
     * {element: the element to be effected (element.style)
     * ,unit: the style unit that changes will effect ('opacity')
     * ,onDest: the destany when layout is "on" ('1')
     * ,offDest: the destany when layout is "off" ('0')
     * example: {element:bottomElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'}
     */
    this.bgCoverArray = [];

    this.exposed = false;
    this.resizedTo = 0;

    /**
     * Adds element to its parent and set properties like style, resizers etc.
     * The val object may contain the following elements:
     * id: the html element id.
     * type: the element type (div, img, etc).
     * parent: the parent element it will be appended to.
     * innerHTML: any inner html if needed (svg, other html structures).
     * style: all the style declerations of the element.
     * resizer: resize settings that will apply to the element when the player is resized.
     * displayer: display settings that will apply to the element when the layout is exposed or hidden.
     */
    function addLayoutElement(val)
    {
        var elm = ref.createChild(val.type, val.parent);
        elm.id = val.id;

        for(var i in val.style) elm.style[i] = val.style[i];
        if(val.innerHTML)elm.innerHTML = val.innerHTML;
        if(val.resizer)
        {
            val.resizer.obj = elm;
            ref.resizersArray.push(val.resizer);
        }
        if(val.displayer)
        {
            val.displayer.element = elm.style;
            ref.displayArray.push(val.displayer);
        }
        if(val.id != 'transparentInner')ref.exposeHoldersArray.push(elm);
        elm.style.userSelect = 'none';
        elm.style.msUserSelect = 'none';
        elm.style.mozUserSelect = 'none';
        elm.style.webkitUserSelect = 'none';
        elm.style.webkitTapHighlightColor = 'rgba(0,0,0,0)';
        elm.style.webkitTapHighlightColor = 'ransparent';
        elm.style.pointerEvents = 'auto';

        ref[val.id] = elm;

        return elm;
    }
    this.addLayoutElement = addLayoutElement;

    //AD COVER used for mobile touch events
    var dataObj = {id:'adCover', type:'div',parent:this.layout, style:{position:'absolute',top:'0px',left:'0px',zIndex:'100',cursor:'pointer', width:'100%', height:'100%', display:'none', visibility:'visible'}}
    this.adCover = addLayoutElement(dataObj);
    if(!this.isDesktop){this.adDisplayArray.push({element:this.adCover.style,unit:'display', onDest:'block', offDest:'none'});}

    //TRANSPARENT COVER used for mobile float dragging touch events
    var dataObj = {id:'transparentCover', type:'div',parent:this.layout, style:{cursor:'pointer', width:'100%', height:'100%', visibility:'visible'}}
    this.transparentCover = addLayoutElement(dataObj);

    //TRANSPARENT INNER used to darken the background for player buttons
    dataObj = {id:'transparentInner', type:'div',parent:this.transparentCover, style:{cursor:'pointer', visibility:'inherit', width:'100%', height:'100%', backgroundColor:'rgba(0,0,0,0.4)', opacity:this.opacityInit}}
    this.transparentInner = addLayoutElement(dataObj);
    this.displayArray.push({element:this.transparentInner.style,unit:'opacity', onDest:'1', offDest:'0'});

    //BOTTOM ELEMENTS unit
    dataObj = {id:'bottomElements', type:'div',parent:this.layout, style:{width:'100%', bottom:'0px', left:'0px', position:'absolute', opacity:'1', visibility:'visible'}}
    var bottomElements = addLayoutElement(dataObj);
    this.displayArray.push({element:bottomElements.style, unit:'opacity', onDest:'1', offDest:'0', onStart:function(){bottomElements.style.display = 'block';},onComplete:function(){progressBar.style.pointerEvents = 'auto';}, offComplete:function(){bottomElements.style.display = 'none';ref.progressBar.style.pointerEvents = 'none';}});
    this.bgCoverArray.push({element:bottomElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'});

    //CENTER ELEMENTS
    dataObj = {id:'centerElements', type:'div',parent:this.layout, style:{top:'50%', left:'50%', transform:'translate(-50%, -50%)', position:'absolute', opacity:'1', visibility:'visible'}}
    var centerElements = addLayoutElement(dataObj);
    this.displayArray.push({element:centerElements.style,unit:'opacity', onDest:'1', offDest:'0', onStart:function(){centerElements.style.display = 'block';}, offComplete:function(){centerElements.style.display = 'none';}});
    this.adDisplayArray.push({element:centerElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'});
    this.bgCoverArray.push({element:centerElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'});

    //LIKE AND VIEWS ELEMENTS
    var smallPlayerElementsTop = this.layoutConfig.showTitle ? "32px" : "10px";
    var bigPlayerElementsTop = this.layoutConfig.showTitle ? "41px" : "14px";

    dataObj = {id:'viewsElements', type:'div',parent:this.layout, style:{top:'50px', left:'25px', position:'absolute', zIndex:0, display:'inline-block', opacity:'0', visibility:'visible', fontFamily:this.fontFamilyName, pointerEvents : 'none'}}
    var viewsElements = addLayoutElement(dataObj);
    this.viewsElements = viewsElements;
    this.displayArray.push({element:viewsElements.style, unit:'opacity', onDest:'1', offDest:'0', onComplete:function(){viewsElements.style.pointerEvents = 'none';viewsIcon.style.pointerEvents = 'none';viewsNum.style.pointerEvents = 'none';likesNum.style.pointerEvents = 'none';},
        offComplete:function(){viewsElements.style.pointerEvents = 'auto';}});
    this.adDisplayArray.push({element:viewsElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'});
    this.bgCoverArray.push({element:viewsElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'});
    this.resizersArray.push({obj:viewsElements, left:['20px','9px'], top: [bigPlayerElementsTop, smallPlayerElementsTop]});

    dataObj = {id:'viewsIcon', type:'div',parent:viewsElements, innerHTML:viewsLogoSvg, style:{position:'relative', width:'35px', height:'19px', cursor:'pointer', pointerEvents : 'none', color:'white', float: 'left'}};
    var viewsIcon = addLayoutElement(dataObj);
    this.viewsIcon = viewsIcon;
    this.resizersArray.push({obj:viewsIcon, height:['19px','16px'], width:['18px','21px'], bottom:['1px','0px']});

    dataObj = {id:'viewsNum', type:'div',parent:viewsElements, style:{position:'relative', width:'max-content', height:'20px', cursor:'pointer', pointerEvents : 'none', color:'white', float: 'left', resizer:{fontSize:['18px','14px']}}};
    var viewsNum = addLayoutElement(dataObj);
    this.viewsNum = viewsNum;
    this.resizersArray.push({obj:viewsNum, fontSize:['14px','13px'], left:['2px','0px']});

    dataObj = {id:'likesIcon', type:'div',parent:viewsElements, innerHTML:likeBtnSVG, style:{position:'relative', width:'16px', height:'16px', cursor:'pointer', float: 'left', left: '10px'}};
    var likesIcon = addLayoutElement(dataObj);
    this.hoverColorArray.push(likesIcon);
    this.likesIcon = likesIcon;
    this.likesIcon.emptyLikesIconHTML = likesIcon.innerHTML;
    this.likesIcon.filledLikesIconHTML =  likesIcon.innerHTML.replace(new RegExp('fill="#fff"', 'g'), 'fill="white"').replace(new RegExp('fill="#000" fill-opacity="0"', 'g'), 'fill=' + this.designColor + ' fill-opacity="1"');
    this.resizersArray.push({obj:likesIcon, bottom:['1px','2px']});

    dataObj = {id:'likesNum', type:'div',parent:viewsElements, style:{position:'relative', width:'max-content', height:'20px', cursor:'pointer', pointerEvents : 'none', color:'white', float: 'left'}};
    var likesNum = addLayoutElement(dataObj);
    this.resizersArray.push({obj:likesNum, fontSize:['14px','13px'], left:['12px','14px']});

    //TOP LEFT ELEMENTS
    dataObj = {id:'topLeftElements', type:'div',parent:this.layout, style:{top:'0px', left:'0px', width:'calc(100% - 100px)', position:'absolute', opacity:'1', visibility:'visible'},resizer:{width:['calc(100% - 120px)','calc(100% - 90px)']}}
    var topLeftElements = addLayoutElement(dataObj);
    this.adDisplayArray.push({element:topLeftElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'});

    //TOP RIGHT ELEMENTS
    dataObj = {id:'topRightElements', type:'div',parent:this.layout, style:{top:'0px', right:'0px', position:'absolute'}}
    var topRightElements = addLayoutElement(dataObj);
    this.adDisplayArray.push({element:topRightElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'});
    this.bgCoverArray.push({element:topRightElements.style,unit:'visibility', onDest:'hidden', offDest:'visible'});

    //PROGRESS BAR
    dataObj = {id:'progressBar', type:'div',parent:bottomElements, style:{width:'100%', height:'17px', backgroundColor:'rgba(0,0,0,0.0)', bottom:'41px', left:'0px', position:'absolute', cursor:'pointer'}, resizer:{bottom:['41px','27px']}}
    var progressBar = addLayoutElement(dataObj);
    this.adDisplayArray.push({element:progressBar.style,unit:'visibility', onDest:'hidden', offDest:'visible'});

    dataObj = {id:'baseBar', type:'div',parent:progressBar, style:{width:'100%', height:'5px', backgroundColor:'rgba(0,0,0,0.6)', bottom:'6px', left:'0px', position:'absolute'}, resizer:{height:['5px','4px']}}
    var baseBar = addLayoutElement(dataObj);

    dataObj = {id:'loadBar', type:'div',parent:progressBar, style:{width:'0%', height:'5px', backgroundColor:'rgba('+this.rgbColor+',0.4)', bottom:'6px', left:'0px', position:'absolute'}, resizer:{height:['5px','4px']}}
    var loadBar = addLayoutElement(dataObj);
    this.loadBar = loadBar;

    dataObj = {id:'timeBar', type:'div',parent:progressBar, style:{width:'0%', height:'5px', backgroundColor:'rgba('+this.rgbColor+',1)', bottom:'6px', left:'0px', position:'absolute'}, resizer:{height:['5px','4px']}}
    var timeBar = addLayoutElement(dataObj);
    this.timeBar = timeBar;

    var hitArea = '<div style="position:absolute; width:30px; height:30px; top:50%; left:50%; transform:translate(-50%, -50%);"></div>'
    dataObj = {id:'timeDot', type:'div',parent:progressBar, innerHTML:hitArea, style:{width:'13px', height:'13px', backgroundColor:'rgb('+this.rgbColor+')', bottom:'8px', borderRadius:'50%', left:'0%', position:'absolute', transform:'translate(-50%,50%)', zIndex:10}, resizer:{width:['13px','9px'],height:['13px','9px']}}
    var timeDot = addLayoutElement(dataObj);

    //FULLSCREEN BTNS
    dataObj = {id:'fullScreenBtn', type:'div',parent:bottomElements, style:{width:'20px', height:'20px', bottom:'14px', right:'14px', position:'absolute', cursor:'pointer'}, resizer:{bottom:['14px','8px'],right:['14px','7px']}}
    var fullScreenBtn = addLayoutElement(dataObj);
    this.fullScreenBtn = fullScreenBtn;

    dataObj = {id:'fullScreenIco', type:'div',parent:fullScreenBtn, innerHTML:fullScreenBtnSVG, style:{width:'12px', height:'12px', top:'50%', left:'50%', transform:'translate(-50%, -50%)', position:'relative', cursor:'pointer'}, resizer:{width:['20px','12px'],height:['20px','12px']}}
    var fullScreenIco = addLayoutElement(dataObj);
    this.hoverColorArray.push(fullScreenIco);

    dataObj = {id:'normalScreenBtn', type:'div',parent:bottomElements, style:{display:'none', width:'20px', height:'20px', bottom:'14px', right:'14px', position:'absolute', cursor:'pointer'}, resizer:{bottom:['14px','8px'],right:['14px','7px']}}
    var normalScreenBtn = addLayoutElement(dataObj);
    //this.hoverColorArray.push(normalScreenBtn);
    this.normalScreenBtn = normalScreenBtn;

    dataObj = {id:'normalScreenIco', type:'div',parent:normalScreenBtn, innerHTML:normalScreenBtnSVG, style:{width:'12px', height:'12px', top:'50%', left:'50%', transform:'translate(-50%, -50%)', position:'relative', cursor:'pointer'}, resizer:{width:['20px','12px'],height:['20px','12px']}}
    var normalScreenIco = addLayoutElement(dataObj);
    this.hoverColorArray.push(normalScreenIco);

    // CAPTIONS BTN
    var captionsRight = this.layoutConfig.allowFullScreen ? ['50px','34px'] : ['14px','11px'];
    dataObj = {id:'captionsOnBtn', type:'div',parent:bottomElements, style:{width:'20px', height:'20px', bottom:'10px', right:'50px', position:'absolute', cursor:'pointer'}, resizer:{bottom:['10px','5px'],right:captionsRight}}
    var captionsOnBtn = addLayoutElement(dataObj);
    this.captionsOnBtn = captionsOnBtn;

    dataObj = {id:'captionsOnIco', type:'div',parent:captionsOnBtn, innerHTML:captionsOnBtnSVG, style:{width:'12px', height:'12px', top:'50%', left:'50%', transform:'translate(-50%, -50%)', position:'relative', cursor:'pointer'}, resizer:{width:['30px','20px'],height:['30px','20px']}}
    var captionsOnIco = addLayoutElement(dataObj);
    this.hoverColorArray.push(captionsOnIco);

    dataObj = {id:'captionsOffBtn', type:'div',parent:bottomElements, style:{display: 'none', width:'20px', height:'20px', bottom:'10px', right:'50px', position:'absolute', cursor:'pointer'}, resizer:{bottom:['10px','5px'],right:captionsRight}}
    var captionsOffBtn = addLayoutElement(dataObj);
    this.captionsOffBtn = captionsOffBtn;

    dataObj = {id:'captionsOffIco', type:'div',parent:captionsOffBtn, innerHTML:captionsOffBtnSVG, style:{width:'12px', height:'12px', top:'50%', left:'50%', transform:'translate(-50%, -50%)', position:'relative', cursor:'pointer'}, resizer:{width:['30px','20px'],height:['30px','20px']}}
    var captionsOffIco = addLayoutElement(dataObj);
    this.hoverColorArray.push(captionsOffIco);

    //SOUND CONTROLL
    this.soundControllRightRef = this.layoutConfig.allowFullScreen ? ['50px', '34px'] : ['14px', '11px'];
    this.soundControllRight = this.soundControllRightRef.slice();
    dataObj = {id:'soundControll', type:'div',parent:bottomElements, style:{bottom:'25px', right:'50px', position:'absolute', cursor:'pointer'}, resizer:{bottom:['25px','18px'],right:this.soundControllRight}}
    var soundControll = addLayoutElement(dataObj);
    this.soundControll = soundControll;

    dataObj = {id:'soundScrabber', type:'div',parent:soundControll, style:{position:'absolute', right:'0px', bottom:'0px', transform:'translate(0, 50%)', display:'block', opacity:'0', visibility:'hidden'}}
    var soundScrabber = addLayoutElement(dataObj);
    this.soundScrabber = soundScrabber;

    dataObj = {id:'soundScrabberBG', type:'div',parent:soundScrabber, style:{width:'174px', height:'40px', opacity:'0.72', borderRadius:'5px', backgroundColor:'#0c0c0c', position:'absolute', right:'-8px', bottom:'0px', transform:'translate(0, 50%)'}, resizer:{width:['174px','108px'],height:['40px','27px']}}
    var soundScrabberBG = addLayoutElement(dataObj);

    dataObj = {id:'soundScrabberHit', type:'div',parent:soundScrabber, style:{width:'120px', height:'17px', bottom:'0px', right:'32px', position:'absolute', transform:'translate(0, 50%)'}, resizer:{width:['120px','65px'],right:['32px','24px']}}
    var soundScrabberHit = addLayoutElement(dataObj);
    this.soundScrabberHit = soundScrabberHit;

    dataObj = {id:'soundScrabberBase', type:'div',parent:soundScrabberHit, style:{width:'100%', height:'4px', bottom:'6px', right:'0px', position:'absolute', opacity:'0.34', borderRadius:'2px', backgroundColor:'#fefefe'}}
    var soundScrabberBase = addLayoutElement(dataObj);

    dataObj = {id:'soundScrabberMain', type:'div',parent:soundScrabberHit, style:{width:'50%', height:'4px', bottom:'6px', left:'0px', position:'absolute', borderRadius:'2px', backgroundColor:'#fefefe'}}
    var soundScrabberMain = addLayoutElement(dataObj);

    dataObj = {id:'soundOnBtn', type:'div',parent:soundControll, innerHTML:soundOnBtnSVG, style:{width:'22px', height:'22px', bottom:'0px', right:'0px', position:'absolute', transform:'translate(0, 50%)', display:'none'}, resizer:{width:['22px','16px'],height:['22px','16px']}}
    var soundOnBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(soundOnBtn);

    dataObj = {id:'soundOffBtn', type:'div',parent:soundControll, innerHTML:soundOffBtnSVG, style:{width:'22px', height:'22px', bottom:'0px', right:'0px', position:'absolute', transform:'translate(0, 50%)'}, resizer:{width:['22px','16px'],height:['22px','16px']}}
    var soundOffBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(soundOffBtn);

    //PROGRESS TEXT
    dataObj = {id:'progressTxt', type:'div',parent:bottomElements, style:{pointerEvents:'none', bottom:'14px', left:'19px', position:'absolute', fontSize:'14px', fontFamily:this.fontFamilyName, color:'#fff'}, resizer:{fontSize:['14px','11px'],bottom:['14px','10px'],left:['19px','11px']}};
    var progressTxt = addLayoutElement(dataObj);
    progressTxt.innerText = '';
    this.adDisplayArray.push({element:progressTxt.style,unit:'visibility', onDest:'hidden', offDest:'visible'});

    //CENTERED ELEMENTS
    dataObj = {id:'playBtn', type:'div',parent:centerElements, innerHTML:playBtnSVG, style:{visibility:'visible', width:'60px', height:'60px', top:'0px', left:'0px', position:'absolute', transform:'translate(-50%, -50%)', zIndex:1, cursor:'pointer'}, resizer:{width:['60px','40px'],height:['60px','40px']}};
    var playBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(playBtn);

    dataObj = {id:'pauseBtn', type:'div',parent:centerElements, innerHTML:pauseBtnSVG, style:{visibility:'visible',width:'60px', height:'60px', top:'0px', left:'0px', position:'absolute', transform:'translate(-50%, -50%)', zIndex:1, display:'none', cursor:'pointer'}, resizer:{width:['60px','40px'],height:['60px','40px']}};
    var pauseBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(pauseBtn);

    dataObj = {id:'backBtn', type:'div',parent:centerElements, style:{width:'44px', height:'44px', top:'50%', right:'42px', transform:'translate(-50%, -50%)', position:'absolute', cursor:'pointer'}, resizer:{right:['22px','6px']}};
    var backBtn = addLayoutElement(dataObj);

    dataObj = {id:'backBtnIco', type:'div',parent:backBtn, innerHTML:prvNxtBtnSVG, style:{width:'24px', height:'24px', top:'50%', left:'50%', transform:'translate(-50%, -50%)', position:'relative', cursor:'pointer'}, resizer:{width:['24px','18px'],height:['24px','18px']}};
    var backBtnIco = addLayoutElement(dataObj);
    this.hoverColorArray.push(backBtnIco);

    dataObj = {id:'nextBtn', type:'div',parent:centerElements, style:{width:'44px', height:'44px', top:'50%', left:'42px', transform:'translate(50%, -50%)', position:'absolute', cursor:'pointer'}, resizer:{left:['22px','6px']}}
    var nextBtn = addLayoutElement(dataObj);

    dataObj = {id:'nextBtnIco', type:'div',parent:nextBtn, innerHTML:prvNxtBtnSVG, style:{width:'24px', height:'24px', top:'50%', left:'50%', transform:'scale(-1) translate(50%, 50%)', position:'relative', cursor:'pointer'}, resizer:{width:['24px','18px'],height:['24px','18px']}}
    var nextBtnIco = addLayoutElement(dataObj);
    this.hoverColorArray.push(nextBtnIco);

    //Skip Progress Elements
    dataObj = {id:'skipXsec', type:'div', parent:bottomElements, style:{width:'110px', height:'14px', position:'relative', bottom:'10px', left:'50%', transform: 'translateX(-50%)'}, resizer:{width:['110px','75px'], height:['21px','14px'], bottom:['10px','10px']}};
    var skipXsec = addLayoutElement(dataObj);
    this.adDisplayArray.push({element:skipXsec.style,unit:'visibility', onDest:'hidden', offDest:'visible'});

    dataObj = {id:'skipXsecBackBtn', type:'div', parent:skipXsec, style:{width:'21px', height:'21px', left:'0', position:'absolute', cursor:'pointer'}, resizer:{width:['21px','14px'], height:['21px','14px']}};
    this.skipXsecBackBtn = addLayoutElement(dataObj);

    dataObj = {id:'skipXsecBackBtnIco', type:'div', parent:this.skipXsecBackBtn, innerHTML:skipProgressBtnSvg, style:{width:'21px', height:'21px', position:'relative', cursor:'pointer'}, resizer:{width:['21px','14px'], height:['21px','14px']}};
    var skipXsecBackBtnIco = addLayoutElement(dataObj);
    this.hoverColorArray.push(skipXsecBackBtnIco);

    dataObj = {id:'skipXsecForwardBtn', type:'div', parent:skipXsec, style:{width:'21px', height:'21px', right:'0px', position:'absolute', cursor:'pointer', transform: 'scaleX(-1)'}, resizer:{width:['21px','14px'], height:['21px','14px']}};
    this.skipXsecForwardBtn = addLayoutElement(dataObj);

    dataObj = {id:'skipXsecForwardBtnIco', type:'div', parent:this.skipXsecForwardBtn, innerHTML:skipProgressBtnSvg, style:{width:'21px', height:'21px', position:'relative', cursor:'pointer'}, resizer:{width:['21px','14px'], height:['21px','14px']}};
    var skipXsecForwardBtnIco = addLayoutElement(dataObj);
    this.hoverColorArray.push(skipXsecForwardBtnIco);

    dataObj = {id:'skipXsecStaticNum', type:'div', parent:skipXsec, innerHTML:'10 Sec', style:{position:'absolute', left:'50%', transform: 'translateX(-50%)', bottom:'8px', color:'#fff', fontSize:'14px', fontFamily:this.fontFamilyName}, resizer:{fontSize:['14px','10px'], top:['1px','0']}};
    var skipXsecStaticNum = addLayoutElement(dataObj);

    //TOP LEFT ELEMENTS
    var publisherLogoStyle = this.layoutConfig.publisherLogoPosition == 'left' ? {left:'19px'} : {right:'19px'};
    dataObj = {id:'publisherLogo', type:'img',parent:this.layout, style:{zIndex:'-1', top:'14px', position:'absolute', userSelect:'none', msUserSelect:'none', mozUserSelect:'none', webkitUserSelect:'none', display:'none', opacity:'0.4'}};
    SekindoUtils.assignObject(dataObj.style, publisherLogoStyle);
    var publisherLogo = addLayoutElement(dataObj);
    var publisherLogoPosition = this.layoutConfig.publisherLogoPosition == 'left' ? {left:['19px','13px']} : {right:['19px','13px']};
    var resizerObj = {obj:publisherLogo, top:['14px','10px'],transform:['translate(50%, 50%) scale(2','translate(0%, 0%) scale(1)']};
    SekindoUtils.assignObject(resizerObj, publisherLogoPosition);
    this.resizersArray.push(resizerObj);
    this.adDisplayArray.push({element:publisherLogo.style,unit:'visibility', onDest:'hidden', offDest:'visible'});
    this.bgCoverArray.push({element:publisherLogo.style,unit:'visibility', onDest:'hidden', offDest:'visible'});

    dataObj = {id:'titleObj', type:'div',parent:topLeftElements, style:{ top:'14px', left:'19px', width:'100%', fontFamily:this.fontFamilyName, fontSize:'18px', color:"white", position:'absolute', display:'none', opacity:'1'}, resizer:{top:['14px','10px'],left:['19px','11px'],fontSize:['18px','14px']}}
    var titleObj = addLayoutElement(dataObj);
    this.displayArray.push({element:titleObj.style, unit:'opacity', onDest:'1', offDest:'0', onStart:function(){titleObj.style.pointerEvents = 'auto';}, offComplete:function(){titleObj.style.pointerEvents='none';}});

    dataObj = {id:'titleTxt', type:'div',parent:titleObj, style:{cursor:'pointer', paddingRight:'15px', textOverflow:'ellipsis', whiteSpace:'nowrap', overflow:'hidden', userSelect:'none', msUserSelect:'none', mozUserSelect:'none', webkitUserSelect:'none'}};
    var titleTxt = addLayoutElement(dataObj);

    dataObj = {id:'titleIco', type:'div',parent:titleObj, innerHTML:openTabIconSVG, style:{pointerEvents:'none', marginLeft:'-15px', width:'14px', minWidth: '14px', height:'14px', paddingRight:'5px', transform:'scale(-1, 1)', marginTop: '3px'}, resizer:{width:['14px','12px'],minWidth:['14px','12px'],height:['14px','12px'],marginTop:['3px','1px']}};
    var titleIco = addLayoutElement(dataObj);
    titleIco.innHTML = titleIco.innerHTML;

    //TOP RIGHT ELEMENTS
    dataObj = {id:'primisLogoWrapper', type:'div',parent:topRightElements, style:{transform:'scale(1.5)', cursor:'pointer'}, resizer:{transform:['scale(1.5)','scale(1.1)']}}
    var primisLogoWrapper = addLayoutElement(dataObj);

    dataObj = {id:'primisLogo', type:'div',parent:primisLogoWrapper, innerHTML:primisLogoSVG, style:{top:'8px', right:'7px', width:'42px', position:'absolute', opacity:'1'}, displayer:{unit:'width', onDest:'42px', offDest:'12px'}}
    var primisLogo = addLayoutElement(dataObj);
    primisLogo.innerTxt = primisLogo.ownerDocument.getElementById('primisLogoTxt');
    this.displayArray.push({element:primisLogo.innerTxt.style, unit:'opacity', onDest:'2', offDest:'0', onStart:function(){primisLogo.style.pointerEvents = 'auto';}, offComplete:function(){primisLogo.style.pointerEvents='none';}});

    dataObj = {id:'closeBtn', type:'div',parent:this.trigger({type:this.fetch.getObj, value:'flowCloseBtnDiv'}), innerHTML:flowCloseBtnSVG, style:{cursor:'pointer', width:'22px', height:'22px', top:'14px', right:'14px', position:'absolute'}, resizer:{width:['22px',this.closeBtnWidth],height:['22px',this.closeBtnHeight],top:['0px','0px'],right:['0px','0px']}}
    var closeBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(closeBtn);

    //shareBtnSVG emailBtnSVG facebookBtnSVG linkedinBtnSVG pinterestBtnSVG twitterBtnSVG whatsappBtnSVG
    dataObj = {id:'shareContainer', type:'div',parent:topRightElements, style:{ top:'38px', right:'8px', position:'absolute', zIndex:'1', opacity:'1', display:'none', cursor: 'pointer'}, resizer:{top:['38px','26px']}}
    var shareContainer = addLayoutElement(dataObj);
    this.displayArray.push({element:shareContainer.style, unit:'opacity', onDest:'1', offDest:'0', onComplete:function(){shareContainer.style.pointerEvents = 'auto';}, offComplete:function(){shareContainer.style.pointerEvents = 'none';shareBG.style.display = 'none';facebookBtn.style.display = 'none';twitterBtn.style.display = 'none';linkedinBtn.style.display = 'none';pinterestBtn.style.display = 'none';whatsappBtn.style.display = 'none';emailBtn.style.display = 'none';}});

    // positioning share buttons in a 1/2 rows according to available width
    function shareBGWidth() {return (ref.layoutConfig.playerWidth < 260) ? '142px' : '242px';}
    function shareBGHeight() {return (ref.layoutConfig.playerWidth < 260) ? '64px' : '34px';}
    function pinterestBtnRight() {return (ref.layoutConfig.playerWidth < 260)?'44px':'146px';}
    function shareBtnsTop() {return (ref.layoutConfig.playerWidth < 260)?'40px':'10px';}
    function whatsappBtnRight() {return (ref.layoutConfig.playerWidth < 260) ? '78px' : '180px';}
    function emailBtnRight() {return (ref.layoutConfig.playerWidth < 260) ? '112px' : '214px';}

    dataObj = {id:'shareBG', type:'div',parent:shareContainer, style:{ top:'0px', right:'0px', width:'322px', height:'40px', objectFit: 'contain', opacity: '0.72', borderRadius: '5px', backgroundColor: '#0c0c0c', position:'absolute', display:'none', opacity:'0'}, resizer:{width:['322px',shareBGWidth],height:['40px',shareBGHeight]}}
    var shareBG = addLayoutElement(dataObj);

    dataObj = {id:'shareBtn', type:'div',parent:shareContainer, innerHTML:shareBtnSVG, style:{ width:'20px', height:'20px', position:'absolute', top:'10px', right:'10px'}, resizer:{width:['20px','14px'],height:['20px','14px']}}
    var shareBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(shareBtn);

    dataObj = {id:'facebookBtn', type:'div',parent:shareContainer, innerHTML:facebookBtnSVG, style:{ top:'10px', right:'56px', width:'20px', height:'20px', position:'absolute', display:'none', opacity:'0'}, resizer:{width:['20px','14px'],height:['20px','14px'], right:['56px','44px']}}
    var facebookBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(facebookBtn);

    dataObj = {id:'twitterBtn', type:'div',parent:shareContainer, innerHTML:twitterBtnSVG, style:{ top:'10px', right:'102px', width:'20px', height:'20px', position:'absolute', display:'none', opacity:'0'}, resizer:{width:['20px','14px'],height:['20px','14px'], right:['102px','78px']}}
    var twitterBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(twitterBtn);

    dataObj = {id:'linkedinBtn', type:'div',parent:shareContainer, innerHTML:linkedinBtnSVG, style:{ top:'10px', right:'148px', width:'20px', height:'20px', position:'absolute', display:'none', opacity:'0'}, resizer:{width:['20px','14px'],height:['20px','14px'], right:['148px','112px']}}
    var linkedinBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(linkedinBtn);

    dataObj = {id:'pinterestBtn', type:'div',parent:shareContainer, innerHTML:pinterestBtnSVG, style:{ top:'10px', right:'194px', width:'20px', height:'20px', position:'absolute', display:'none', opacity:'0'}, resizer:{width:['20px','14px'],height:['20px','14px'], right:['194px',pinterestBtnRight], top:['10px',shareBtnsTop]}}
    var pinterestBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(pinterestBtn);

    dataObj = {id:'whatsappBtn', type:'div',parent:shareContainer, innerHTML:whatsappBtnSVG, style:{ top:'10px', right:'240px', width:'20px', height:'20px', position:'absolute', display:'none', opacity:'0'}, resizer:{width:['20px','14px'],height:['20px','14px'], right:['240px',whatsappBtnRight], top:['10px',shareBtnsTop]}}
    var whatsappBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(whatsappBtn);

    dataObj = {id:'emailBtn', type:'div',parent:shareContainer, innerHTML:emailBtnSVG, style:{ top:'10px', right:'286px', width:'20px', height:'20px', position:'absolute', display:'none', opacity:'0'}, resizer:{width:['20px','14px'],height:['20px','14px'], right:['286px',emailBtnRight], top:['10px',shareBtnsTop]}}
    var emailBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(emailBtn);

    dataObj = {id:'lightBoxCloseBtn', type:'div',parent:this.trigger({type:this.fetch.getObj, value:'config.mainVideoDiv'}), innerHTML:lightboxCloseBtnSVG, style:{position:'absolute', zIndex:11, width:'24px', height:'24px', top:'-28px', right:'-28px', opacity:1, display:'none', cursor:'pointer'}};
    var lightBoxCloseBtn = addLayoutElement(dataObj);
    this.hoverColorArray.push(lightBoxCloseBtn);
    this.lightBoxCloseBtn = lightBoxCloseBtn;

    dataObj = {id:'liveIco', type:'div',parent:this.layout, innerHTML:liveIcoSVG, style:{position:'absolute', zIndex:11, width:'31px', height:'12px', bottom:'9px', left:'9px', display:'none', cursor:'pointer', pointerEvents : 'none'}};
    var liveIco = addLayoutElement(dataObj);
    this.resizersArray.push({obj:liveIco, width:['52px','31px'], height:['20px','12px'], bottom:['13px','9px'], left:['18px','9px']});
    this.adDisplayArray.push({element:liveIco.style,unit:'visibility', onDest:'hidden', offDest:'visible'});
    this.bgCoverArray.push({element:liveIco.style,unit:'visibility', onDest:'hidden', offDest:'visible'});
    this.liveIco = liveIco;

    //Add hover color to all relevant buttons
    this.setHoverColors = function(colorsArray)
    {
        for(var el in colorsArray)
        {
            if((typeof colorsArray[el]) != 'object')return;
            if(colorsArray[el].childNodes)colorsArray[el].childNodes[0].style.pointerEvents = 'none';
            colorsArray[el].innHTML = colorsArray[el].innerHTML;
            if(this.isDesktop)
            {
                colorsArray[el].addEventListener(this.evtType.mouseover, function (e)
                {
                    var innerHTML = e.currentTarget.innerHTML;
                    innerHTML = innerHTML.replace(new RegExp('fill="#fff"', 'g'), 'fill="' + ref.designColor + '"');
                    e.currentTarget.innerHTML = innerHTML;
                });
                colorsArray[el].addEventListener(this.evtType.mouseout, function (e)
                {
                    e.currentTarget.innerHTML = e.currentTarget.innHTML;
                });
            }
            else
            {
                colorsArray[el].addEventListener(this.evtType.mouseup, function (e)
                {
                    var ref1 = this;
                    var innerHTML = e.currentTarget.innerHTML;
                    innerHTML = innerHTML.replace(new RegExp('fill="#fff"', 'g'), 'fill="' + ref.designColor + '"');
                    e.currentTarget.innerHTML = innerHTML;
                    this.targ = e.currentTarget;
                    setTimeout(function(){ref1.targ.innerHTML = ref1.targ.innHTML;},400)
                });
            }
        }
    }
    this.setHoverColors(this.hoverColorArray);

    //hide unused buttons
    var checkActiveElements = [captionsOnBtn, captionsOffBtn, fullScreenBtn, normalScreenBtn, backBtn, nextBtn, primisLogo, closeBtn, lightBoxCloseBtn, skipXsec];
    for(var i =0; i < checkActiveElements.length; i++)
    {
        var elm = checkActiveElements[i];
        if(!elm.style)return;
        elm.style.display = (this.activeButtons.indexOf(elm.id) != -1)?elm.style.display:'none';
    }
};

LayoutDesign.prototype.addLayoutFunctionality = function()
{
    var ref = this;

    this.preventDefault = function(e)
    {
        if(e && e.cancelable)e.preventDefault();
    }
    this.likesIcon.addEventListener(this.evtType.click, function()
    {
        ref.trigger({type:ref.noteOut.onVideoLike});
    });

    this.progressBar.addEventListener(this.evtType.click, onProgressBarClick);
    function onProgressBarClick(e)
    {
        //avoid dragging result in desktop when mouse exits player area
        if(ref.dragging && (e.currentTarget != ref.layout && ref.isDesktop))return;

        var pct = (e.clientX || e.touches[0].clientX || ref.timeBar.offsetWidth) / ref.progressBar.offsetWidth;
        var val = (pct * 100) +'%';
        if(!ref.dragging && e.currentTarget == ref.progressBar)
        {
            SekindoUtils.animateTo(ref.timeBar.style, 'width', val, 0.4, 'easeIn');
            SekindoUtils.animateTo(ref.timeDot.style, 'left', val, 0.4, 'easeIn');
        }

        ref.dragging = false;

        var time = Math.min(1, Math.max(0, pct));
        ref.trigger({type:ref.noteOut.onTimeScrabber,  value:time});
    }

    this.skipXsecForwardBtn.addEventListener(this.evtType.mouseup, onSkipProgressUpdate);
    this.skipXsecBackBtn.addEventListener(this.evtType.mouseup, onSkipProgressUpdate);

    function onSkipProgressUpdate(e)
    {
        var currSkipBtn = e.currentTarget.id,
            skipValue = currSkipBtn === 'skipXsecForwardBtn' ? 10 : -10,
            timeBarWidth = parseFloat(ref.timeBar.style.width),
            videoDuration = parseInt(configPlayer.contentPlayList[configPlayer.currContentIndex].duration),
            progressbarWidth = ref.loadBar.offsetWidth,
            toSkipProgress = progressbarWidth / videoDuration * 10 / progressbarWidth,
            percentSkipTo = currSkipBtn === 'skipXsecForwardBtn' ? timeBarWidth + toSkipProgress * 100 : timeBarWidth - toSkipProgress * 100;

        percentSkipTo = (Math.min(100, Math.max(0, percentSkipTo)) + '%');
        SekindoUtils.animateTo(ref.timeBar.style, 'width', percentSkipTo, 0.4, 'easeIn');
        SekindoUtils.animateTo(ref.timeDot.style, 'left', percentSkipTo, 0.4, 'easeIn');

        ref.trigger({type:ref.noteOut.onSkipProgress, value:skipValue});
    }

    //Update the progress bar according to the video progress with "videoProgress" event.
    this.progressBar.onTimeEvent = function(val)
    {
        ref.duration = val.duration;
        ref.loadBar.style.width = val.loaded/val.duration*100+'%';
        if(!ref.dragging)
        {
            ref.timeBar.style.width = val.currTime/val.duration*100+'%';
            ref.timeDot.style.left = val.currTime/val.duration*100+'%';
        }
    };

    this.dragging = false;
    this.timeDot.addEventListener(this.evtType.mousedown, function(e)
    {
        ref.preventDefault(e);
        ref.dragging = true;
        ref.movementXplorer = e.clientX;//Solution for Explorer and mobile
    } );

    this.timeDot.addEventListener(this.evtType.mousemove, function (e)
    {
        ref.preventDefault(e);
        if(!ref.dragging)return;
        if(!ref.isDesktop)
        {
            if(e.movementX == undefined || e.movementX == NaN)//Solution for Explorer and mobile
            {
                e.movementX = (e.clientX || e.touches[0].clientX) - ref.movementXplorer;
                ref.movementXplorer = (e.clientX || e.touches[0].clientX);
            }

            var X = parseInt(ref.timeDot.offsetLeft)

            X += e.movementX;
            ref.timeDot.style.left = X +'px';

            var pct = ref.timeDot.offsetLeft / ref.progressBar.offsetWidth;
            var val = (pct * 100) +'%';
            ref.timeBar.style.width = val;
        }
        else
        {
            if(!ref.dragging)return;
            var pct = e.clientX / ref.progressBar.offsetWidth;
            var val = (pct * 100) +'%';
            ref.timeBar.style.width = val;
            ref.timeDot.style.left = val;
        }
    });

    this.layout.addEventListener(this.evtType.mouseleave,function(e)
    {
        if(ref.layoutConfig.clientInfo.browser == 'papp')ref.preventDefault(e);
        ref.dragging = false;
    });

    this.timeDot.addEventListener(this.evtType.mouseup, onTimeDotMouseUp);
    this.timeDot.addEventListener(this.evtType.mouseleave, onTimeDotMouseUp);
    this.layout.addEventListener(this.evtType.mouseup, onTimeDotMouseUp);
    function onTimeDotMouseUp(e)
    {
        if(ref.layoutConfig.clientInfo.browser == 'papp')ref.preventDefault(e);
        if(!ref.dragging)return;
        onProgressBarClick(e);
        ref.dragging = false;
    };

    this.publisherLogo.src = this.layoutConfig.logoUrl;

    this.publisherLogo.onload = function(val)
    {
        ref.publisherLogo.style.display =  'block';
        var ar = ref.publisherLogo.offsetHeight / ref.publisherLogo.offsetWidth;
        ar = Math.max(0.1,Math.min(10,parseInt(ar*100)/100))
        var wCurve = SekindoUtils.getBezierAnim('easeOut',  ar/15 );
        var w = 80 - wCurve * 80 + 20;
        ref.publisherLogo.style.maxWidth = parseInt(w) +'px';

        var hCurve = SekindoUtils.getBezierAnim('easeOut',  0.666-ar/15 );
        var h = 80 - hCurve * 80 + 20;
        ref.publisherLogo.style.maxHeight = parseInt(h) +'px'
    };

    this.publisherLogo.onerror = function()
    {
        try
        {
            ref.publisherLogo.parentNode.removeChild(ref.publisherLogo);
        }
        catch (e){}
    };

    this.soundControll.addEventListener(this.evtType.mouseenter, function(e)
    {
        ref.preventDefault(e);
        if(!ref.isDesktop) return;
        if(ref.sizeCompare < 350){ref.skipXsec.style.zIndex = '-1';}
        ref.soundScrabber.style.visibility = 'visible';
        SekindoUtils.animateTo(ref.soundScrabber.style, 'opacity', '1', 0.4, 'easeOut');
        // hide video time if not enough width
        var distCalc = (ref.layoutConfig.allowFullScreen? 22 : 0) + ((ref.captionsStatus != -1)? 32 : 0) + 180;
        ref.progressTxt.style.display = (ref.layoutConfig.playerWidth > distCalc)?'block':'none';
    });

    this.soundControll.addEventListener(this.evtType.mouseleave, function(e)
    {
        ref.preventDefault(e);
        if(!ref.isDesktop) return;
        SekindoUtils.animateTo(ref.soundScrabber.style, 'opacity', '0', 0.4, 'easeOut', function(){ref.soundScrabber.style.visibility = 'hidden';});
        ref.skipXsec.style.zIndex = 'unset';
        ref.progressTxt.style.display = 'block';
    });

    this.soundScrabberHit.addEventListener(this.evtType.click,function(e)
    {
        ref.preventDefault(e);
        var pct = e.offsetX/ref.soundScrabberHit.offsetWidth;
        var val = (pct * 100) +'%';
        var vol = Math.min(1, Math.max(0, pct));
        ref.trigger({type:ref.noteOut.onVolumeScrabber, value:vol});
    });

    this.soundOnBtn.addEventListener(this.evtType.mouseup, function(e)
    {
        ref.preventDefault(e);
        ref.trigger({type:ref.noteOut.onMute, value:true});
    });

    this.soundOffBtn.addEventListener(this.evtType.mouseup, function(e)
    {
        ref.preventDefault(e);
        ref.trigger({type:ref.noteOut.onMute, value:false});
    });

    //On mobile first click exposes the layout. second click is on elements
    this.adCover.addEventListener(this.evtType.click, function(e) {ref.trigger({type:ref.noteOut.onAdCover, value:e});},false);
    this.adCover.addEventListener(this.evtType.mouseup, function(e){ref.trigger({type:ref.noteOut.onAdCover, value:e});},false);
    //this.adCover.addEventListener(this.evtType.mousemove, function(e){ref.trigger({type:ref.noteOut.onAdCover, value:e});},false);
    this.transparentCover.addEventListener(this.evtType.click, function(e) {ref.trigger({type:ref.noteOut.onTransparentCover, value:e});},false);
    this.transparentCover.addEventListener(this.evtType.mouseup, function(e){ref.trigger({type:ref.noteOut.onTransparentCover, value:e});},false);
    //this.transparentCover.addEventListener(this.evtType.mousemove, function(e){ref.trigger({type:ref.noteOut.onTransparentCover, value:e});},false);

    this.onExposeHideEvent = function (e)
    {
        ref.rolledOverElm = e.target;
        if(e.type == "mouseleave")
        {
            ref.transparentCover.style.pointerEvents = 'auto';
            ref.transparentInner.style.pointerEvents = 'auto';
            hideLayout();
        }
        else if(!ref.mouseIsOn)
        {
            ref.mouseIsOn = true;

            ref.trigger({type:ref.noteOut.onLayoutExposed,value:true});
            ref.exposeLayout();
            clearTimeout(ref.hideLayoutTimeout);
            if(!ref.trigger({type:ref.fetch.adIsPlaying}))
            {
                ref.hideLayoutTimeout = setTimeout(function()
                {
                    if(ref.mouseIsOn)
                    {
                        //If we rollover a button then dont hide layout.
                        var doHideLayout = true;
                        for(var i = 0; i < ref.exposeHoldersArray.length; i++)
                        {
                            if(ref.exposeHoldersArray[i] == ref.rolledOverElm)doHideLayout = false;
                        }
                        if(doHideLayout && ref.isPlaying)hideLayout();
                        ref.rolledOverElm = null;
                        ref.mouseIsOn = false;
                    }
                }, 3600)
            }
            else
            {
                ref.transparentCover.style.pointerEvents = 'none';
                ref.transparentInner.style.pointerEvents = 'none';
            }
        }
        function hideLayout()
        {
            if(!ref.isPlaying) return;

            ref.trigger({type:ref.noteOut.onLayoutExposed,value:false});
            ref.hideLayout();
            ref.rolledOverElm = null;
            ref.mouseIsOn = false;
        }
    };

    this.exposeLayout = function (val)
    {
        ref.preventDefault(val);
        ref.playlistDesign.onExposeLayout(true)
        if(ref.trigger({type:ref.fetch.adIsPlaying}))
        {
            ref.adCover.style.display = 'none';
        }
        ref.exposed = true;
        for(var i in ref.displayArray)
        {
            var obj = ref.displayArray[i];
            var element = obj.element;
            if(!element)return;
            var unit = obj.unit;
            var onDest = obj.onDest;
            var time = 0.4;
            var type = 'easeIn';
            if(obj.onStart)obj.onStart();

            SekindoUtils.animateTo(element, unit, onDest, time, type, obj.onComplete);
        }
    };

    this.hideLayout = function (val)
    {
        ref.preventDefault(val);
        ref.playlistDesign.onExposeLayout(false)
        ref.exposed = false;
        clearTimeout(ref.mouseOnTimeout);
        ref.mouseIsOn = false;
        if(ref.trigger({type:ref.fetch.adIsPlaying}) && !ref.isDesktop)
        {
            ref.adCover.style.display = 'block';
        }
        for(var i in ref.displayArray)
        {
            //element, unit, dest, time, type, onComplete, onAnimate
            var obj = ref.displayArray[i];
            var element = obj.element;
            if(!element)return;
            var unit = obj.unit;
            var offDest = obj.offDest;
            var time = 0.4;
            var type = 'easeOut';
            SekindoUtils.animateTo(element, unit, offDest, time, type, obj.offComplete);
        }
    };

    this.closeBtn.addEventListener(this.evtType.click, function(e)
    {
        e.preventDefault(e);
        e.stopPropagation();
        ref.trigger({type:ref.noteOut.onCloseBtnClick});
    });

    this.closeBtn.addEventListener(this.evtType.mouseup, function(e)
    {
        // React app overklill
        e.preventDefault(e);
        e.stopPropagation();
    });

    this.primisLogo.addEventListener(this.evtType.click, function()
    {
        ref.trigger({type:ref.noteOut.onPrimis});
    });

    this.pauseBtn.addEventListener(this.evtType.mouseup, function(e)
    {
        ref.preventDefault(e);
        ref.trigger({type:ref.noteOut.onPause});
    },false);

    this.playBtn.addEventListener(this.evtType.mouseup, function(e)
    {
        ref.preventDefault(e);
        ref.trigger({type:ref.noteOut.onPlay});
    },false);

    this.nextBtn.addEventListener(this.evtType.mouseup, function(e)
    {
        ref.preventDefault(e);
        ref.trigger({type:ref.noteOut.onNext});
    });

    this.backBtn.addEventListener(this.evtType.mouseup, function(e)
    {
        ref.preventDefault(e);
        ref.trigger({type:ref.noteOut.onBack});
    });

    this.titleTxt.addEventListener(this.evtType.mouseup, function(){
        ref.trigger({type:ref.noteOut.onTitleClick});
    });

    this.titleTxt.addEventListener(this.evtType.mouseenter, function(e)
    {
        if(!ref.trigger({type:ref.fetch.clickUrl}) && !ref.trigger({type:ref.fetch.contentClickUrl}))return;
        ref.titleObj.style.color = ref.designColor;
        ref.titleIco.innerHTML = ref.titleIco.innerHTML.replace(new RegExp('fill="#fff"', 'g') , 'fill="'+ref.designColor+'"');
    });

    this.titleTxt.addEventListener(this.evtType.mouseleave, function(e)
    {
        ref.titleObj.style.color = 'white';
        ref.titleIco.innerHTML = ref.titleIco.innHTML;
    });

    this.fullScreenBtn.addEventListener(this.evtType.mouseup, function(e)
    {
        ref.trigger({type:ref.noteOut.onFullScreen});
    });

    this.normalScreenBtn.addEventListener(this.evtType.click, function(e)
    {
        ref.trigger({type:ref.noteOut.onNormalScreen});
    });

    this.lightBoxCloseBtn.addEventListener(this.evtType.click, function(e)
    {
        ref.trigger({type:ref.noteOut.onLightboxClose});
    });

    this.onCaptionsBtnClick = function (val)
    {
        ref.trigger({type:ref.noteOut.onCaption, value:val});
    };

    this.captionsOnBtn.addEventListener(this.evtType.click, function(e){ref.onCaptionsBtnClick(false)});
    this.captionsOffBtn.addEventListener(this.evtType.click, function(e){ref.onCaptionsBtnClick(true)});

    //Set share behaviour
    function exposeShareMenu(e)
    {
        ref.preventDefault(e);
        ref.shareBG.style.display = 'block';
        ref.facebookBtn.style.display = 'block';
        ref.twitterBtn.style.display = 'block';
        ref.linkedinBtn.style.display = 'block';
        ref.pinterestBtn.style.display = 'block';
        ref.whatsappBtn.style.display = 'block';
        ref.emailBtn.style.display = 'block';
        SekindoUtils.animateTo(ref.shareBG.style, 'opacity', '0.72', 0.2, 'easeIn');
        SekindoUtils.animateTo(ref.facebookBtn.style, 'opacity', '1', 0.4, 'easeIn');
        SekindoUtils.animateTo(ref.twitterBtn.style, 'opacity', '1', 0.4, 'easeIn');
        SekindoUtils.animateTo(ref.linkedinBtn.style, 'opacity', '1', 0.4, 'easeIn');
        SekindoUtils.animateTo(ref.pinterestBtn.style, 'opacity', '1', 0.4, 'easeIn');
        SekindoUtils.animateTo(ref.whatsappBtn.style, 'opacity', '1', 0.4, 'easeIn');
        SekindoUtils.animateTo(ref.emailBtn.style, 'opacity', '1', 0.4, 'easeIn');
    }

    if(this.isDesktop)
    {
        this.shareContainer.addEventListener(this.evtType.mouseover,exposeShareMenu);
        this.shareContainer.addEventListener(this.evtType.mouseout,function(e)
        {
            SekindoUtils.animateTo(ref.shareBG.style, 'opacity', '0', 0.4, 'easeIn');
            SekindoUtils.animateTo(ref.facebookBtn.style, 'opacity', '0', 0.4, 'easeIn');
            SekindoUtils.animateTo(ref.twitterBtn.style, 'opacity', '0', 0.4, 'easeIn');
            SekindoUtils.animateTo(ref.linkedinBtn.style, 'opacity', '0', 0.4, 'easeIn');
            SekindoUtils.animateTo(ref.pinterestBtn.style, 'opacity', '0', 0.4, 'easeIn');
            SekindoUtils.animateTo(ref.whatsappBtn.style, 'opacity', '0', 0.4, 'easeIn');
            SekindoUtils.animateTo(ref.emailBtn.style, 'opacity', '0', 0.4, 'easeIn',function()
            {
                ref.shareBG.style.display = 'none';
                ref.facebookBtn.style.display = 'none';
                ref.twitterBtn.style.display = 'none';
                ref.linkedinBtn.style.display = 'none';
                ref.pinterestBtn.style.display = 'none';
                ref.whatsappBtn.style.display = 'none';
                ref.emailBtn.style.display = 'none';
            });
        });
    }
    else
    {
        this.shareContainer.addEventListener(this.evtType.click,exposeShareMenu);
    }

    this.facebookBtn.addEventListener(this.evtType.click, onShareClick);
    this.twitterBtn.addEventListener(this.evtType.click, onShareClick);
    this.linkedinBtn.addEventListener(this.evtType.click, onShareClick);
    this.pinterestBtn.addEventListener(this.evtType.click, onShareClick);
    this.whatsappBtn.addEventListener(this.evtType.click, onShareClick);
    this.emailBtn.addEventListener(this.evtType.click, onShareClick);

    function onShareClick(e)
    {
        var targetId = e.currentTarget.id;
        var shareUrl = '';
        var title = encodeURIComponent('\''+ref.headerTitle+'\'');
        var clickUrl = encodeURIComponent(ref.trigger({type:ref.fetch.shareUrl}));

        switch(targetId)
        {
            case 'facebookBtn':
                //https://www.facebook.com/sharer.php?u={url}&summary={summary}&title={title}&description={description}&picture={picture}
                var shareUrl = 'https://www.facebook.com/sharer.php?u='+clickUrl;
                break;
            case 'twitterBtn':
                //https://twitter.com/intent/tweet?url={url}&text={text}
                var shareUrl = 'https://twitter.com/intent/tweet?url='+clickUrl+'&text='+title+'&via='+'Primis';
                break;
            case 'linkedinBtn':
                //https://www.linkedin.com/shareArticle?mini=true&url={url}&title={title}&summary={summary}&source={articlesource}
                var shareUrl = 'https://www.linkedin.com/shareArticle?mini=true&url='+clickUrl;
                break;
            case 'pinterestBtn':
                //http://pinterest.com/pin/create/link/?url=[url]&description=[title]&media=[thumbnail]
                var shareUrl = 'https://pinterest.com/pin/create/link/?url='+clickUrl;
                break;
            case 'whatsappBtn':
                //https://wa.me/?text=urlencodedtext
                var shareUrl = 'https://wa.me/?text='+title+' '+clickUrl+' via @Primis';
                break;
            case 'emailBtn':
                var shareUrl = 'mailto:?subject='+title+'&body=Video Discovery helped me find this video '+title+' '+clickUrl+' via @Primis';
                break;
        }
        var windowOpen = window.open(shareUrl, '_blank');
        if(windowOpen == null)window.open(shareUrl, '_top');
        ref.trigger({type:ref.noteOut.onShareClick});
    }
    this.trigger({type:this.noteOut.doFlowDrag,value:this.transparentCover});
};

LayoutDesign.prototype.calcPlayerSizes = function (data)
{
    //Default sizing configurations
    var min = 300;
    var max = 500;
    var minBar = 59;
    var maxBar = 93;

    //Calc player height
    var playerAR = data.HEIGHT/data.WIDTH;
    var videoAR = data.verticalOrientation?(16/9):(9/16);
    var vidH = (data.WIDTH * Math.min(videoAR, playerAR));

    //Calc playlist bar
    var H = (Math.max(min, Math.min(max, vidH)) - min) / (max - min);
    var barH = (minBar + H * (maxBar - minBar));
    var playerOptH = vidH + barH;

    var allowPlayList = data.allowPlayList && ((data.HEIGHT - barH) >= data.minOptimalHeight) //and bigger then minOptimalHeight

    if (!allowPlayList)
    {
        barH = 0;
    }

    //The video height is calculated by the bar height when playlist available and player height is limited (horizontal banners)
    if (playerOptH > data.HEIGHT && allowPlayList)
    {
        var minPct = minBar / (min + minBar);
        var maxPct = maxBar / (max + maxBar);
        var difPct = maxPct - minPct;

        var pct = minPct + (Math.max(min, Math.min(max, data.HEIGHT)) - min) / (max - min) * difPct;
        var barH = (Math.max(minBar, Math.min(maxBar, data.HEIGHT * pct)));
        var vidH = (data.HEIGHT - barH);
    }

    var barUnitW = Math.round(barH / 9 * 16);
    var vidW = Math.round(vidH / videoAR);
    barH = Math.round(barH);
    vidH = Math.round(vidH);

    if (data.minOptimalHeight <= data. HEIGHT)
    {
        vidH = Math.max(data.minOptimalHeight, vidH);
    }

    var playerSizes = {};
    playerSizes.playerWidth = vidW;
    playerSizes.playerHeight = vidH + barH + (allowPlayList ? 7 : 0);
    playerSizes.videoWidth = vidW;
    playerSizes.videoHeight = vidH;
    playerSizes.playlistUnitWidth = barUnitW;
    playerSizes.playlistHeight = barH;
    playerSizes.allowPlaylist = allowPlayList;

    return playerSizes;
};

LayoutDesign.prototype.layoutResize = function(val)
{
    var ref = this;

    ref.layoutConfig.videoWidth = val.playerSizes.videoWidth;
    ref.layoutConfig.videoHeight = val.playerSizes.videoHeight;
    ref.layoutConfig.playerWidth = val.playerSizes.playerWidth;
    ref.layoutConfig.playerHeight = val.playerSizes.playerHeight;
    ref.layoutConfig.playlistUnitWidth = val.playerSizes.playlistUnitWidth;
    ref.layoutConfig.playlistHeight = val.playerSizes.playlistHeight;

    if(ref.layoutConfig.isCloseBtn && (val.flowing || this.layoutConfig.playerMode == 'slider' || this.layoutConfig.playerMode == 'inRead'))
    {
        this.closeBtn.style.display = 'block';
        this.closeBtn.style.opacity = 1;
        this.primisLogo.style.display = 'none';
    }
    else
    {
        this.closeBtn.style.display = 'none';
        if(this.layoutConfig.isPrimisLogo)
        {
            this.primisLogo.style.display = 'block';
        }
    }

    if(ref.playlistDesign)
    {
        ref.playlistDesign.onResize();
        ref.playlistDesign.container.style.display = val.playerSizes.allowPlaylist ? 'block' : 'none';
    }

    function resizeElements(val)
    {
        ref.resizedTo = val;
        for(var i =0;  i<ref.resizersArray.length; i++)
        {
            var obj = ref.resizersArray[i].obj;
            for(var j in  ref.resizersArray[i])
            {
                if(obj != ref.resizersArray[i][j])
                {
                    var result = (ref.resizersArray[i][j][val].constructor  === Function)?ref.resizersArray[i][j][val]():ref.resizersArray[i][j][val]
                    obj.style[j] = result;
                }
            }
        }
    }

    this.sizeCompare = this.layoutConfig.verticalOrientation?this.layoutConfig.videoHeight:this.layoutConfig.videoWidth;
    if(this.sizeCompare < 650 )
    {
        resizeElements(1);
        var isInSmallPlayer = this.sizeCompare < 250 ? true : false;
        isInSmallPlayer ? ref.skipXsec.style.display = 'none' : ref.skipXsec.style.display = 'block';
    }
    else
    {
        resizeElements(0)
    }

    if(this.layoutConfig.isShowViews && val.playerSizes.videoHeight >= this.layoutConfig.minOptimalHeight)
    {
        this.viewsElements.style.display = 'block';
    }
    else
    {
        this.viewsElements.style.display = 'none';
    }
};

LayoutDesign.prototype.setFullscreen = function()
{
    var ref = this;

    ref.fullScreenBtn.style.display = SekindoServices.fullscreen.isFullscreen ? 'none' : 'block';
    ref.normalScreenBtn.style.display = SekindoServices.fullscreen.isFullscreen ? 'block' : 'none';
    ref.lightBoxCloseBtn.style.display = (SekindoServices.fullscreen.isFullscreen && ref.layoutConfig.isLightBox) ? 'block' : 'none';
    ref.hideLayout(null, 0.01);
};

LayoutDesign.prototype.onCaptions = function (val)
{
    var ref = this;

    //Hide or display captions buttons.
    if(val === -1)
    {
        this.soundControllRight[0] = this.soundControllRightRef[0];
        this.soundControllRight[1] = this.soundControllRightRef[1];
        this.captionsOnBtn.style.display = 'none';
        this.captionsOffBtn.style.display = 'none';
        var sizeCompare = this.layoutConfig.verticalOrientation?this.layoutConfig.videoHeight:this.layoutConfig.videoWidth;
        this.soundControll.style.right = sizeCompare < 650 ? this.soundControllRight[1] : this.soundControllRight[0];
    }
    else
    {
        //Do we need to relocate sound button
        if (this.captionsStatus === -1)
        {
            this.soundControllRight[0] = (parseInt(this.soundControllRightRef[0]) + 39).toString() + 'px';
            this.soundControllRight[1] = (parseInt(this.soundControllRightRef[1]) + 32).toString() + 'px';
            var sizeCompare = this.layoutConfig.verticalOrientation?this.layoutConfig.videoHeight:this.layoutConfig.videoWidth;
            this.soundControll.style.right = sizeCompare < 650 ? this.soundControllRight[1] : this.soundControllRight[0];
        }

        this.captionsOnBtn.style.display = val?'block':'none';
        this.captionsOffBtn.style.display = val?'none':'block';
    }

    this.captionsStatus = val;
};

LayoutDesign.prototype.setHeaderTitle = function (val)
{
    var ref = this;
    this.headerTitle = val;
    if(val.length)
    {
        this.titleObj.style.display = 'inline-flex';
        this.titleTxt.innerText = val;
        this.titleIco.style.display = (this.trigger({type:this.fetch.clickUrl}) || this.trigger({type:this.fetch.contentClickUrl}))?'block':'none';
    }
    else
    {
        this.titleObj.style.display = 'none';
    }
};

LayoutDesign.prototype.onAdEvent = function onAdEvent(val)
{
    var ref = this;
    if (val.initBgCoverBtns)
    {
        this.layoutAPI({type:'playing',content:{player:'layout'}});
        this.onBgCoverBtnsChange(false);
        if (!this.mouseIsOn)
        {
            this.hideLayout();
        }
    }

    if(val.adStarted)
    {
        if(!val.params.controls) this.layout.style.display = 'none';
        this.trigger({type:this.noteOut.onRemoveAdBreak});
        if(val.params.skipTime != -1) this.addSkipAdTimeout = setTimeout(function(){ref.addAdSkipBtn(val.params.skipTime);},1200);
        this.transparentCover.style.pointerEvents = 'none';
        this.transparentInner.style.pointerEvents = 'none';
    }
    else
    {
        this.layout.style.display = 'block';

        if(this.skipBtn)ref.trigger({type:this.noteOut.doRemoveChild,value:{destiny:'layout', visual:this.skipBtn}});
        if(this.addSkipAdTimeout)clearTimeout(this.addSkipAdTimeout);
        this.transparentCover.style.pointerEvents = 'auto';
        this.transparentInner.style.pointerEvents = 'auto';
    }

    this.playlistDesign.onAdEvent(val.adStarted);

    for(var i in ref.adDisplayArray)
    {
        var obj = ref.adDisplayArray[i];
        var element = obj.element;
        if(!element)return;
        var unit = obj.unit;
        var dest = val.adStarted?obj.onDest:obj.offDest;
        element[unit] = dest;
    }
};

LayoutDesign.prototype.onBgCoverBtnsChange = function onBgCoverBtnsChange(isBgShowed)
{
    for(var i in this.bgCoverArray)
    {
        var obj = this.bgCoverArray[i];
        var element = obj.element;
        if(!element)return;
        var unit = obj.unit;
        var dest = isBgShowed?obj.onDest:obj.offDest;
        element[unit] = dest;
    }
};

LayoutDesign.prototype.addAdSkipBtn = function(skipDelayTime)
{
    var ref = this;
    if (skipDelayTime == -1)
    {
        // no skip at all
        return
    }

    var dataObj = {id:'skipBtn', type:'div',parent:this.layout.parentNode/*, style:{position:'absolute',top:'0px',left:'0px',zIndex:'100',cursor:'pointer', width:'100%', height:'100%', display:'none', visibility:'visible'}*/}
    var skipBtn = this.addLayoutElement(dataObj);
    skipBtn.id = 'skipBtn';
    skipBtn.style.position = 'fixed';
    skipBtn.style.bottom = '60px';
    skipBtn.style.right = '-90px';
    skipBtn.style.zIndex = '1000000';
    skipBtn.style.backgroundColor = 'rgba(0,0,0,0.8)';
    skipBtn.style.color = 'white';
    skipBtn.style.display = 'inline-block';
    skipBtn.style.border =  '1px solid rgba(255,255,255,0.8)';
    skipBtn.style.borderRight =  0;
    skipBtn.style.padding = '4px 6px 4px 10px';
    skipBtn.style.fontFamily = this.fontFamilyName;
    skipBtn.style.width = '58px';
    skipBtn.style.fontSize = '12px';
    skipBtn.style.transform = 'scale(1.2)translate(-6px,0)';
    skipBtn.style.cursor = 'default';
    skipBtn.style.pointerEvents = 'auto';
    skipBtn.style.userSelect = 'none';
    skipBtn.style.msUserSelect = 'none';
    skipBtn.style.mozUserSelect = 'none';
    skipBtn.style.webkitUserSelect = 'none';

    this.skipBtn = skipBtn;
    var counter = document.createElement('span');
    skipBtn.appendChild(counter);
    SekindoUtils.animateTo(skipBtn.style, 'right', '-60px', .4, 'easeIn');

    var skipDelayTime = 5.6;
    var pct = 1;

    if(this.skipAdTimeout)clearTimeout(this.skipAdTimeout);
    if(this.skipAdInterval)clearInterval(this.skipAdInterval);


    this.skipAdTimeout = setTimeout(function()
    {
        clearInterval(ref.skipAdInterval);
        skipBtn.innerHTML = '<div id="ad-text:n" style="display: inline-block; padding-right: 4px;">Skip Ad</div><svg height="12px" version="1.1" viewBox="12 12 12 12" width="12px" fill="#FFFFFF" transform="scale(.8) translate(0,2)"><use  xlink:href="#ytp-id-34"></use><path  d="M 12,24 20.5,18 12,12 V 24 z M 22,12 v 12 h 2 V 12 h -2 z" id="ytp-id-34"></path></svg>';
        skipBtn.style.cursor = 'pointer';
        skipBtn.addEventListener(ref.evtType.click, function(e)
        {
            ref.trigger({type:ref.noteOut.onSkipAd});
        });
        SekindoUtils.animateTo(skipBtn.style, 'right', '0px',.6, 'easeIn');
    },skipDelayTime*1000);

    this.skipAdInterval = setInterval(function()
    {
        pct -= 100/(skipDelayTime*1000);
        var secToGo = Math.round(skipDelayTime * pct);
        counter.innerText = secToGo;
        if(pct <= 0)clearInterval(ref.skipAdInterval);
    },100);
};

LayoutDesign.prototype.onPlaylistDataUpdate = function onPlaylistDataUpdate(val)
{
    // fill like Icon color
    if (val.isLiked == 1)
    {
        this.likesIcon.innerHTML = this.likesIcon.filledLikesIconHTML;
        this.likesIcon.innHTML = this.likesIcon.filledLikesIconHTML;
    }
    else
    {
        this.likesIcon.innerHTML = this.likesIcon.emptyLikesIconHTML;
        this.likesIcon.innHTML = this.likesIcon.emptyLikesIconHTML;
    }

    // don't show likes count if it's smaller than minimum
    val.likes < this.trigger({type:this.fetch.minLikesNum}) ? this.likesNum.style.display = "none" : this.likesNum.style.display = "block";

    this.likesNum.innerText = SekindoUtils.KBMFormatter(val.likes+val.isLiked);
    this.viewsNum.innerText = SekindoUtils.KBMFormatter(val.views);
};

function PlaylistDesign(layout)
{
    var ref = this;
    var rightArrowSvg = '<svg width="10px" height="16px" style="margin-left: 28px; margin-top: 14px" viewBox="0 0 10 16" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">                    <!-- Generator: Sketch 46.2 (44496) - https://www.bohemiancoding.com/sketch -->            <title>Arrow right #1 Icon</title>            <desc>Created with Sketch.</desc>        <defs></defs>        <g id="behavior-copy" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <g id="pause-movie" transform="translate(-1335.000000, -830.000000)" fill="#fff">            <g id="Group" transform="translate(560.000000, 334.000000)">                <g transform="translate(-347.000000, -131.000000)" id="Playlist-">                    <g transform="translate(294.000000, 582.000000)">                        <g id="arrows" transform="translate(64.000000, 45.000000)">                            <path d="M764.5,8.0005 C764.5,7.5995 764.657628,7.2225 764.942954,6.9405 L771.775821,0.2925 C772.170888,-0.0975 772.809381,-0.0975 773.204448,0.2925 C773.598517,0.6835 773.598517,1.3165 773.204448,1.7065 L766.72774,8.0005 L773.204448,14.2945 C773.598517,14.6845 773.598517,15.3175 773.204448,15.7085 C772.809381,16.0995 772.170888,16.0995 771.775821,15.7085 L764.942954,9.0615 C764.657628,8.7775 764.5,8.4025 764.5,8.0005 Z" id="Arrow-right-#1-Icon" transform="translate(769.000000, 8.000875) scale(-1, 1) translate(-769.000000, -8.000875) "></path>                        </g>                    </g>                </g>            </g>        </g>        </g>        </svg>';
    var leftArrowSvg = '<svg width="9px" height="16px" style="margin-left: 2px; margin-top: 14px" viewBox="0 0 9 16" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">                    <!-- Generator: Sketch 46.2 (44496) - https://www.bohemiancoding.com/sketch -->            <title>Arrow Left #1 Icon</title>            <desc>Created with Sketch.</desc>        <defs></defs>        <g id="behavior-copy" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <g id="pause-movie" transform="translate(-571.000000, -831.000000)" fill="#fff">            <g id="Group" transform="translate(560.000000, 334.000000)">                <g transform="translate(-347.000000, -131.000000)" id="Playlist-"> <g transform="translate(294.000000, 582.000000)"> <g id="arrows" transform="translate(64.000000, 45.000000)">     <path d="M0.442954136,10.0615 C0.157627823,9.7775 0,9.4025 0,9.0005 C0,8.5995 0.157627823,8.2225 0.442954136,7.9405 L7.27582098,1.2925 C7.67088818,0.9025 8.30938063,0.9025 8.70444783,1.2925 C9.09851739,1.6835 9.09851739,2.3165 8.70444783,2.7065 L2.22774006,9.0005 L8.70444783,15.2945 C9.09851739,15.6845 9.09851739,16.3175 8.70444783,16.7085 C8.30938063,17.0995 7.67088818,17.0995 7.27582098,16.7085 L0.442954136,10.0615 L0.442954136,10.0615 L0.442954136,10.0615 Z" id="Arrow-Left-#1-Icon"></path> </g> </g> </g> </g> </g> </g> </svg>';

    this.layout = layout;
    this.trigger = layout.trigger;
    this.noteIn = layout.noteIn;
    this.noteOut = layout.noteOut;
    this.fetch = layout.fetch;
    this.layoutConfig = layout.layoutConfig;
    this.dragIt = false;
    this.isDragged = 0;
    this.unitsArray = [];
    this.barUnitWidth = 180;
    this.barHeight = 100;
    this.loadDefaultFont = this.layoutConfig.loadDefaultFont;
    this.fontFamilyName = this.layoutConfig.fontFamilyName;
    this.fontFamilySize = this.layoutConfig.fontFamilySize;
    this.fontFamilyLink = this.layoutConfig.fontFamilyLink;

    //Add family font
    if(this.loadDefaultFont)
    {
        var ifd = ref.trigger({type:'getObj', value:'config.playerIframeDocument'});
        var head  = ifd.getElementsByTagName('head')[0];
        var link  = ifd.createElement('link');
        link.rel  = 'stylesheet';
        link.type = 'text/css';
        link.href = this.fontFamilyLink;
        head.appendChild(link);
    }

    this.mainPlayerDiv = ref.trigger({type:'getObj', value:'config.mainPlayerDiv'});
    this.mainVideoDiv = ref.trigger({type:'getObj', value:'config.mainVideoDiv'});

    this.container = layout.createChild('div',this.mainPlayerDiv , undefined, true)
    this.container.style.width = '100%';
    this.container.style.height = this.barHeight + 'px';
    this.container.style.position = 'relative';
    this.container.style.zIndex = 10000;
    this.container.style.overflow = 'hidden';
    this.container.style.userSelect = 'none';
    this.container.style.msUserSelect = 'none';
    this.container.style.mozUserSelect = 'none';
    this.container.style.webkitUserSelect = 'none';
    this.container.style.marginLeft = 'auto';
    this.container.style.marginRight = 'auto';
    this.container.id = 'playlistLayoutElement';
    this.mainPlayerDiv.insertBefore(this.container, this.mainVideoDiv.nextSibling);

    var dataObj = {id:'slider', type:'div',parent:this.container,  style:{width:'100%', position:'absolute', left:'0px', bottom:'0px', zIndex:1, userSelect:'none', msUserSelect:'none', mozUserSelect:'none', webkitUserSelect:'none'}};
    this.slider = layout.addLayoutElement(dataObj);

    this.selectedUnit = function(counter)
    {
        ref.currPlaying = counter;
        for(var i = 0; i<ref.unitsArray.length; i++)
        {
            var unit = ref.unitsArray[i];
            unit.setIsPlaying(counter == unit.counter);
        }

        if(ref.unitsArray[counter].container.style.display == 'none')//Current playing content is not in the playlist scroll view
        {
            if(ref.dragIt)return;
            var viewWidth = ref.container.offsetWidth;
            var unitX = parseInt(ref.unitsArray[counter].container.style.left);
            var calc = -1 * unitX;
            var max = ((parseInt(ref.slider.scrollWidth)-parseInt(ref.container.offsetWidth)))*-1;
            calc = Math.min(0,Math.max(max,calc));
            SekindoUtils.animateTo(ref.slider.style, 'left', calc+'px',.6, 'easeOut', null, ref.hideUnrelevantUnits);
        }
    }

    //Rollover Events
    this.container.addEventListener(layout.evtType.mouseenter, function(ev){ ref.eventWrapper(ev, onMouseEnter)});
    function onMouseEnter(val)
    {
        for(var i = 0; i<ref.unitsArray.length; i++)
        {
            var unit = ref.unitsArray[i];
            unit.setIsHoverAll(true);
        }
    }

    this.onExposeLayout = function(val)
    {
        if(val)
        {
            onMouseEnter();
        }
        else
        {
            onMouseLeave();
        }
    };

    this.container.addEventListener(layout.evtType.mouseleave, function(ev){ref.eventWrapper(ev, onMouseLeave)});
    function onMouseLeave(val)
    {
        ref.layout.preventDefault(val);
        animateSlide();
        ref.dragIt = false;
        for(var i = 0; i<ref.unitsArray.length; i++)
        {
            var unit = ref.unitsArray[i];
            unit.setIsHoverAll(false);
        }
    }

    //Drag Events
    this.container.addEventListener(layout.evtType.mousedown, function(ev){ ref.eventWrapper(ev, onMousePress)});
    this.container.addEventListener(layout.evtType.mouseup, function(ev){ ref.eventWrapper(ev, onMouseRelease)});
    this.container.addEventListener(layout.evtType.mouseleave, function(ev){ ref.eventWrapper(ev, onMouseRelease)});
    this.container.addEventListener(layout.evtType.mousemove, function(ev){ ref.eventWrapper(ev, onMouseMove)});

    //Drag functions
    function onMousePress(val)
    {
        SekindoUtils.stopAnimateUnit(ref.slider.style, 'left');
        ref.movementXplorer = val.clientX;//Solution for Explorer and mobile
        ref.dragIt = true;
    }

    function onMouseRelease(val)
    {
        animateSlide();
        ref.dragIt = false;
    }

    function onMouseMove(val)
    {
        if(ref.dragIt)
        {
            if(val.movementX == undefined || val.movementX == NaN)//Solution for Explorer and mobile
            {
                val.movementX = (val.clientX || val.touches[0].clientX) - ref.movementXplorer;
                ref.movementXplorer = (val.clientX || val.touches[0].clientX);
            }
            if(!val.movementX)return;
            if(val.movementX)ref.isDragged = val.movementX;
            var X = parseInt(ref.slider.style.left)
            X += val.movementX;
            ref.slider.style.left =  X+'px';
            ref.hideUnrelevantUnits();
        }
    }

    function animateSlide()
    {
        if(ref.isDragged)
        {
            var X = parseInt(ref.slider.style.left);
            X += ref.isDragged*10;
            var min = 0;
            var max = ((parseInt(ref.slider.scrollWidth)-parseInt(ref.container.offsetWidth)))*-1;
            X = Math.round(Math.min(min,Math.max(max,X)));
            SekindoUtils.animateTo(ref.slider.style, 'left', X+'px',.6, 'easeOut', null, ref.hideUnrelevantUnits);
        }
        ref.isDragged = 0;
        ref.dragIt = false;
    }

    this.hideUnrelevantUnits = function ()
    {
        var sliderX = parseInt(ref.slider.style.left);
        var viewWidth = ref.container.offsetWidth;
        for(var i = 0; i < ref.unitsArray.length; i++)
        {
            var unit = ref.unitsArray[i].container;
            var unitX = parseInt(unit.style.left);
            if (unitX + sliderX + ref.barUnitWidth > 0 && unitX + sliderX < viewWidth)
            {
                unit.style.display = 'block';
            }
            else
            {
                unit.style.display = 'none';
            }
        }
    }

    this.onResize = function(val)
    {
        if(!ref.layoutConfig.playlistUnitWidth)return;
        ref.barUnitWidth = ref.layoutConfig.playlistUnitWidth;
        ref.barHeight = ref.layoutConfig.playlistHeight;

        for(var i = 0; i <ref.unitsArray.length; i++)
        {
            var unit = ref.unitsArray[i];
            unit.container.style.left = i*(ref.barUnitWidth + 6) + 'px';
            unit.container.style.width = ref.barUnitWidth + 'px';
            unit.container.style.height = ref.barHeight + 'px';

            unit.img.style.width = ref.barUnitWidth + 'px';
            unit.img.style.height = ref.barHeight + 'px';
            unit.header.style.width = ref.barUnitWidth - 20 + 'px';
        }

        var lastWidth = parseInt(ref.slider.style.width);
        ref.slider.style.width = ref.unitsArray.length*(ref.barUnitWidth+6) -6 + 'px';
        ref.slider.style.height = ref.barHeight + 'px';
        ref.container.style.height = (ref.barHeight + 7) + 'px';
        this.container.style.width = ref.layoutConfig.videoWidth + 'px';

        var difWidth =  parseInt(ref.slider.style.width) / lastWidth;
        ref.slider.style.left = parseInt(ref.slider.style.left) * difWidth + 'px';
        setTimeout(ref.hideUnrelevantUnits,1);
    }

    //Build playlist itens
    this.contentPlayList = ref.trigger({type:'getObj', value:'config.contentPlayList'});
    for(var i = 0; i <this.contentPlayList.length; i++)
    {
        var unit = new PlaylistUnit(this.contentPlayList[i], this, i, this.layoutConfig);
        unit.container.style.left = i*(this.barUnitWidth + 8) + 'px';
        this.unitsArray.push(unit);
    }
    this.slider.style.width = this.contentPlayList.length*(this.barUnitWidth+8) + 'px';

    var dataObj = {id:'leftArrow', type:'div',parent:this.container, innerHTML:leftArrowSvg, style:{cursor:'pointer', width:'40px', height:'40px', position:'absolute', zIndex:1111,left:'0px', top:'50%', transform: 'translate(0%, -50%)', webkitTransform: 'translate(0%, -50%)'}}
    var leftArrow = layout.addLayoutElement(dataObj);

    var dataObj = {id:'rightArrow', type:'div',parent:this.container, innerHTML:rightArrowSvg, style:{cursor:'pointer', width:'40px', height:'40px', position:'absolute', zIndex:1111,right:'0px', top:'50%', transform: 'translate(0%, -50%)', webkitTransform: 'translate(0%, -50%)'}}
    var rightArrow = layout.addLayoutElement(dataObj);

    layout.setHoverColors([leftArrow,rightArrow]);

    rightArrow.addEventListener(layout.evtType.mousedown, function(ev){ ref.eventWrapper(ev, onArrowPress)});
    rightArrow.addEventListener(layout.evtType.mouseup, function(ev){ ref.eventWrapper(ev, onArrowRelease)});
    rightArrow.addEventListener(layout.evtType.mouseleave, function(ev){ ref.eventWrapper(ev, onArrowRelease)});

    leftArrow.addEventListener(layout.evtType.mousedown, function(ev){ ref.eventWrapper(ev, onArrowPress)});
    leftArrow.addEventListener(layout.evtType.mouseup, function(ev){ ref.eventWrapper(ev, onArrowRelease)});
    leftArrow.addEventListener(layout.evtType.mouseleave, function(ev){ ref.eventWrapper(ev, onArrowRelease)});

    this.eventWrapper = function (ev, func)
    {
        if (ref.layoutConfig.clientInfo.browser == 'papp')
        {
            ref.layout.preventDefault(ev);
        }
        if (ref.trigger({type:ref.fetch.adIsPlaying}))
        {
            return;
        }
        func(ev);
    }

    function onArrowPress(val)
    {
        ref.isDragged = 10;
        if(val.currentTarget.id == 'rightArrow')ref.isDragged = -10;

        ref.arrowInterval = setInterval(function()
        {
            ref.slider.style.left = parseInt(ref.slider.style.left) + ref.isDragged + 'px';
            ref.hideUnrelevantUnits();
        },20)
    }

    function onArrowRelease(val)
    {
        clearInterval(ref.arrowInterval);

        animateSlide();
        ref.isDragged = false;
    }
    return this;
}

PlaylistDesign.prototype.onAdEvent = function onAdEvent(val)
{
    if(val)
    {
        this.container.style.opacity=0.3;
        this.container.style.pointerEvents = 'none';
    }
    else
    {
        this.container.style.opacity=1;
        this.container.style.pointerEvents = 'auto';
    }
};

PlaylistDesign.prototype.destruct = function destruct()
{
    if (this.arrowInterval)
    {
        clearInterval(this.arrowInterval);
    }
    if (this.touchTimeout)
    {
        clearTimeout(this.touchTimeout);
    }
    for (i = 0; i < this.unitsArray.length; i++)
    {
        this.unitsArray[i].destruct();
    }
};

function PlaylistUnit(unit, parent, counter, layoutConfig)
{
    var ref = this;
    this.layoutConfig = layoutConfig;
    this.counter = counter;
    this.isPlaying = false;
    this.fontFamilyName = this.layoutConfig.fontFamilyName;
    this.fontFamilySize = this.layoutConfig.fontFamilySize;

    var dataObj = {id:'playlistUnitContainer', type:'div',parent:parent.slider, style:{width:parent.barUnitWidth+'px', height:parent.barHeight+'px', position:'absolute', left:'0px', bottom:'0px', zIndex:1, backgroundColor:'black', overflow:'hidden', userSelect:'none', msUserSelect:'none', mozUserSelect:'none', webkitUserSelect:'none', pointerEvents:'none', cursor:'pointer'}}
    this.container = parent.layout.addLayoutElement(dataObj);

    var dataObj = {id:'playlistUnitHeader', type:'div',parent:this.container, style:{display:'none', width:parent.barUnitWidth-20+'px', height:'27px',left:'9.5px',top:'9.5px',fontSize:'12px', position:'absolute', zIndex:100, pointerEvents:'none', color:'#FFF', fontFamily:this.fontFamilyName, textOverflow:'ellipsis', whiteSpace:'nowrap', overflow:'hidden', userSelect:'none', msUserSelect:'none', mozUserSelect:'none', webkitUserSelect:'none'}}
    this.header = parent.layout.addLayoutElement(dataObj);
    this.header.innerText = unit.title;

    var dataObj = {id:'playlistUnitPlayIcon', type:'div',parent:this.container, innerHTML:parent.layout.playBtnSVG, style:{display:'none', width:'20px', height:'20px',left:'9.5px',bottom:'9.5px',fontSize:'12px', position:'absolute', zIndex:100, pointerEvents:'none', color:'#FFF', fontFamily:this.fontFamilyName, textOverflow:'ellipsis', whiteSpace:'nowrap', overflow:'hidden', userSelect:'none', msUserSelect:'none', mozUserSelect:'none', webkitUserSelect:'none'}}
    var playIcon = parent.layout.addLayoutElement(dataObj);

    var dataObj = {id:'playlistUnitNowPlaying', type:'div',parent:this.container, style:{width:'70px', textAlign: 'center', textDecoration: 'none', left:'50%',top:'50%',transform: 'translate(-50%, -50%)',fontSize:'11px', display:'none', position:'absolute', lineHeight:'12px', letterSpacing:'0.11px', zIndex:100, pointerEvents:'none', color:'white', fontFamily:this.fontFamilyName, textOverflow:'ellipsis', whiteSpace:'nowrap', overflow:'hidden', userSelect:'none', msUserSelect:'none', mozUserSelect:'none', webkitUserSelect:'none'}}
    var nowPlaying = parent.layout.addLayoutElement(dataObj);
    nowPlaying.innerHTML = 'NOW </br> PLAYING';

    var dataObj = {id:'coverBox', type:'div',parent:this.container, style:{opacity:'0', width:parent.barUnitWidth, height:parent.barHeight+'px', position:'absolute', left:'0px', bottom:'0px', zIndex:1, backgroundColor:'rgba(0,0,0,0.4', overflow:'hidden', userSelect:'none', msUserSelect:'none', mozUserSelect:'none', webkitUserSelect:'none', display:'block', pointerEvents:'none'}}
    var coverBox = parent.layout.addLayoutElement(dataObj);

    this.eventWrapper = function (ev, func)
    {

        parent.layout.preventDefault(ev);

        if (parent.trigger({type:parent.fetch.adIsPlaying}))
        {
            return;
        }
        func(ev);
    }

    this.img = new Image(parent.barUnitWidth,parent.barHeight);
    this.img.src = unit.bgImg;

    this.img.style.pointerEvents = 'none';
    function onImgError()
    {
        if(ref.isImgError)//Avoid infinity error loop
        {
            ref.img.parentNode.removeChild(ref.img);
            return;
        }
        ref.isImgError = true;
        imgSrc = parent.layoutConfig.absolutePath+'/content/video/splayer/assets/bigPlayBtn.jpg';
        ref.img.src = decodeURI(imgSrc);
    }
    this.img.addEventListener('error', function onErr(){onImgError()});
    this.container.appendChild(this.img);

    this.isHoverAll = false;
    this.setIsHoverAll = function(val)
    {
        this.isHoverAll = val;
        if(this.isPlaying)return;

        if(val)
        {
            this.header.style.display = 'block';
            SekindoUtils.animateTo(coverBox.style, 'opacity', '1',.4, 'easeIn');
        }
        else
        {
            this.header.style.display = 'none';
            SekindoUtils.animateTo(coverBox.style, 'opacity', '0',.6, 'easeOut');
        }
    };

    this.setIsPlaying = function(val)
    {
        if(val && this.layoutConfig.isShowPlaylistNowPlaying)
        {
            nowPlaying.style.display = 'block';
            this.header.style.display = 'none';
            coverBox.style.opacity = '1';
            this.container.style.cursor = 'auto';
            playIcon.style.display = 'none';
            this.isPlaying = true;
        }
        else
        {
            nowPlaying.style.display = 'none';
            if(this.isHoverAll)
            {
                coverBox.style.opacity = '1';
                this.header.style.display = 'block';
            }
            else
            {
                coverBox.style.opacity = '0';
                this.header.style.display = 'none';
            }

            this.container.style.cursor = 'pointer';
            this.isPlaying = false;
        }
    };

    this.container.addEventListener(parent.layout.evtType.mouseenter, function(ev){ ref.eventWrapper(ev, onMouseEnter)});
    function onMouseEnter(val)
    {
        if (ref.isPlaying)
        {
            return;
        }
        ref.header.style.fontWeight =  'bold';
        playIcon.style.display = 'block';
    }

    this.container.addEventListener(parent.layout.evtType.mouseleave, function(ev){ ref.eventWrapper(ev, onMouseLeave)});
    function onMouseLeave(val)
    {
        ref.header.style.fontWeight =  'normal';
        playIcon.style.display = 'none';
    }

    //Click Events - cannot use 'click' simple event because of a conflict with draging functionality
    this.container.addEventListener(parent.layout.evtType.mousedown, function(ev){ ref.eventWrapper(ev, onMousePress)});
    this.container.addEventListener(parent.layout.evtType.mouseup, function(ev){ ref.eventWrapper(ev, onMouseRelease)});
    function onMousePress(val)
    {
        if (ref.isPlaying) return;

        ref.clickPosX =  (val.clientX || val.changedTouches[0].clientX);
        ref.clickPosY =  (val.clientY || val.changedTouches[0].clientY);
    }

    function onMouseRelease(val)
    {
        if (ref.isPlaying)return;

        if (Math.sqrt(Math.pow((val.clientX || val.changedTouches[0].clientX) - ref.clickPosX , 2) +
            Math.pow((val.clientY || val.changedTouches[0].clientY) - ref.clickPosY , 2)) < 10)
        {
            parent.trigger({type:parent.noteOut.onSwitch, value:counter});
        }
    }

    parent.slider.appendChild(this.container);
    return this;
}

PlaylistUnit.prototype.destruct = function destruct()
{};

function AutoSkipContentUI(layout)
{
    var ref = this;

    this.layout = layout;
    this.layoutContainer = layout.layout;
    this.trigger = layout.trigger;
    this.noteOut = layout.noteOut;

    //Auto Skip Content Elements
    var dataObj = {id: 'autoSkipContentContainer',type: 'div',parent: this.layoutContainer,style: {width: '108px',height: '72px',position: 'absolute',right: '3px',top: '50%',transform: 'translateY(-50%)',cursor: 'pointer',display: 'none'},resizer: {width: ['108px', '70px'], height: ['72px', '44px']}};
    this.autoSkipContentContainer = layout.addLayoutElement(dataObj);

    dataObj = {id: 'autoSkipContentNext',type: 'div',parent: this.autoSkipContentContainer,style: {width: '103px',height: '33px',position: 'absolute',top: '0',cursor: 'pointer',display: 'block',backgroundColor: '#000',opacity: '0.75',borderRadius: '5px', boxShadow: '0px 0px 4px white'},resizer: {width: ['103px', '67px'], height: ['33px', '20px']}};
    this.autoSkipContentNext = layout.addLayoutElement(dataObj);

    dataObj = {id: 'autoSkipContentNextBg',type: 'div',parent: this.autoSkipContentNext,style: {width: '0',position: 'absolute',cursor: 'pointer',display: 'block',backgroundColor: '#ff3e5f',borderRadius: '5px',zIndex: '-1'},resizer: {height: ['33px', '20px']}};
    this.autoSkipContentNextBg = layout.addLayoutElement(dataObj);

    dataObj = {id: 'autoSkipContentNextTxt',type: 'div',parent: this.autoSkipContentNext,innerHTML: 'Next',style: {lineHeight: '32px', fontFamily: this.layout.fontFamilyName, fontSize: '21px', fontWeight: 'bold', textAlign: 'center', color: '#fff'},resizer: {lineHeight: ['32px', '20px'], fontSize: ['21px', '14px']}};
    this.autoSkipContentNextTxt = layout.addLayoutElement(dataObj);

    dataObj = {id: 'autoSkipContentStay',type: 'div',parent: this.autoSkipContentContainer,style: {width: '103px',height: '33px',position: 'absolute',bottom: '0',cursor: 'pointer',display: 'block',backgroundColor: '#000',opacity: '0.75',borderRadius: '5px', boxShadow: '0px 0px 4px white'},resizer: {width: ['103px', '67px'], height: ['33px', '20px']}};
    this.autoSkipContentStay = layout.addLayoutElement(dataObj);

    dataObj = {id: 'autoSkipContentStayTxt',type: 'div',parent: this.autoSkipContentStay,innerHTML: 'Stay',style: {lineHeight: '32px', fontFamily: this.layout.fontFamilyName, fontSize: '21px', fontWeight: 'bold', textAlign: 'center', color: '#fff'},resizer: {lineHeight: ['32px', '20px'], fontSize: ['21px', '14px']}};
    this.autoSkipContentStayTxt = layout.addLayoutElement(dataObj);

    //Add functionality
    this.autoSkipContentNext.addEventListener(this.layout.evtType.click, function (e)
    {
        ref.layout.preventDefault(e);
        ref.trigger({type: ref.noteOut.onNext});
    });

    this.autoSkipContentStay.addEventListener(this.layout.evtType.click, function (e)
    {
        ref.layout.preventDefault(e);
        ref.trigger({type: ref.noteOut.onAutoSkipStay});
    });
}

AutoSkipContentUI.prototype.displayAutoSkipContent = function displayAutoSkipContent(skipAnimDuration)
{
    var ref = this;

    this.autoSkipContentContainer.style.display = 'block';
    SekindoUtils.animateTo(this.autoSkipContentNextBg.style, 'width', '100%', skipAnimDuration, 'linear', onAutoNext);

    function onAutoNext()
    {
        ref.trigger({type:ref.noteOut.onAutoNext});
    }
}

AutoSkipContentUI.prototype.hideAutoSkipContent = function hideAutoSkipContent(shouldInit)
{
    SekindoUtils.stopAnimateUnit(this.autoSkipContentNextBg.style, 'width');
    this.autoSkipContentContainer.style.display = 'none';

    if (shouldInit)
    {
        this.autoSkipContentNextBg.style.width = '0';
    }
};
		window.Sekindo.stopWords = ["amp","nbsp","i","me","my","myself","we","our","ours","ourselves","you","your","yours","yourself","yourselves","he","him","his","himself","she","her","hers","herself","it","its","itself","they","them","their","theirs","themselves","what","which","who","whom","this","that","these","those","am","is","are","was","were","be","been","being","have","has","had","having","do","does","did","doing","a","an","the","and","but","if","or","because","as","until","while","of","at","by","for","with","about","against","between","into","through","during","before","after","above","below","to","from","up","down","in","out","on","off","over","under","again","further","then","once","here","there","when","where","why","how","all","any","both","each","few","more","most","other","some","such","no","nor","not","only","own","same","so","than","too","very","s","t","can","would","tell","told","will","just","don","should","now"];
		window.Sekindo.playlistId = '4787';
		window.Sekindo.shouldExtractKeywords = true;
Array.prototype.diff = function (a)
{
	return this.filter(function (i)
	{
		return a.indexOf(i) < 0;
	});
};

var keywordsExtraction = function keywordsExtraction()
{
	var ref = this;
	var KEYWORDS_MAX_LIMIT = 200;
	var META_WORDS_WEIGHT = 100;
	var TITLE_WORDS_WEIGHT = 100;
	var HEADER_WORDS_WEIGHT = 200;
	var PLAIN_TEXT_WORDS_WEIGHT = 1;

	this.stopWords = window.Sekindo.stopWords;
	this.wordsFromText = [];
	this.wordsFromMeta = [];
	this.wordsFromTitle = [];
	this.wordsFromHeader = [];

	this.keywordsFromText = [];
	this.keywordsFromMeta = [];
	this.keywordsFromTitle = [];
	this.keywordsFromHeader = [];

	this.toPlainText = function (text)
	{
		// Remove html tags
		var result = text.replace(/<.+?>/g, '', text);
		// Remove newlines and tabs
		result = result.replace(/\n|\r|\t/g, ' ');
		// Remove non-alphanumerics
		result = result.replace(/\W|_/g, ' ');
		// Remove numbers
		// TODO: consider not removing numbers for double or triple keywords
		result = result.replace(/[0-9]/g, '');
		// Remove multi spaces
		result = result.replace(/ +(?= )/g, '');
		result = result.trim().toLowerCase();

		var wordsFromContent = result.split(' ');
		return wordsFromContent.diff(this.stopWords);
	};

	this.buildNGrams = function (wordsArray, singleWordsNGram, doubleWordsNGram, tripleWordsNGram, instanceScore, accumulatorArray)
	{
		for (var i = 0; i < wordsArray.length; i++)
		{
			var word = wordsArray[i];
			// Single words
			if (word in singleWordsNGram)
			{
				singleWordsNGram[word] += instanceScore;
			}
			else
			{
				singleWordsNGram[word] = instanceScore;
			}
			accumulatorArray.push(word);

			// Words couples
			if (i < wordsArray.length - 1)
			{
				var nextWord = wordsArray[i + 1];
				var wordCouple = word + ' ' + nextWord;
				if (wordCouple in doubleWordsNGram)
				{
					doubleWordsNGram[wordCouple] += instanceScore * 2;
				}
				else
				{
					doubleWordsNGram[wordCouple] = instanceScore * 2;
				}
				accumulatorArray.push(wordCouple);
			}

			// Words triples
			if (i < wordsArray.length - 2)
			{
				var nextWord = wordsArray[i + 1];
				var nextNextWord = wordsArray[i + 2];
				var wordTriple = word + ' ' + nextWord + ' ' + nextNextWord;
				if (wordTriple in tripleWordsNGram)
				{
					tripleWordsNGram[wordTriple] += instanceScore * 1.5;
				}
				else
				{
					tripleWordsNGram[wordTriple] = instanceScore * 1.5;
				}
				accumulatorArray.push(wordTriple);
			}
		}
	};

	this.processMetaTags = function (tags, textFromMeta, textFromTitle, textFromHeader)
	{
		// Process all meta tags
		for (var i = 0; i < tags.length; i++)
		{
			var tag = tags[i];
			if (tag.search('description') != -1)
			{
				var content = tag.match(/content=".+?"/);
				if (content && content.length > 0)
				{
					var description = content[0].substr(content[0].indexOf('"') + 1, content[0].lastIndexOf('"') - 3);
					textFromMeta.push(description.toLowerCase());
					continue;
				}
			}

			if (tag.search('keywords') != -1)
			{
				var content = tag.match(/content=".+?"/);
				if (content && content.length > 0)
				{
					var keywords = content[0].substr(content[0].indexOf('"') + 1, content[0].lastIndexOf('"') - 3);
					textFromMeta.push(keywords.toLowerCase());
					continue;
				}
			}

			if (tag.search('title') != -1)
			{
				var title = tag.match(/<title.+?<\//);
				if (title && title.length > 0)
				{
					var titleContent = title[0].substr(title[0].indexOf('>') + 1, title[0].lastIndexOf('<') - 4);
					textFromTitle.push(titleContent.toLowerCase());
					continue;
				}
			}

			if (tag.search('h1') != -1)
			{
				var header = tag.match(/<h1.+?<\//);
				if (header && header.length > 0)
				{
					var headerContent = header[0].substr(header[0].indexOf('>') + 1, header[0].lastIndexOf('<') - 4);
					textFromHeader.push(headerContent.toLowerCase());
					continue;
				}
			}
		}
		if (textFromMeta.length > 0)
		{
			this.wordsFromMeta = this.toPlainText(textFromMeta.join(' '));
		}
		if (textFromTitle.length > 0)
		{
			this.wordsFromTitle = this.toPlainText(textFromTitle.join(' '));
		}
		if (textFromHeader.length > 0)
		{
			this.wordsFromHeader = this.toPlainText(textFromHeader.join(' '));
		}
	};

	this.getClassifiedKeywordsStr = function(keywords)
	{
		var keywordsWithSource = [];
		keywords.forEach(function (keyword)
		{
			var kwToAdd = keyword;
			if (ref.keywordsFromText.indexOf(keyword) !== -1)
			{
				kwToAdd += ":c";
			}
			if (ref.keywordsFromMeta.indexOf(keyword) !== -1)
			{
				kwToAdd += ":m";
			}
			if (ref.keywordsFromTitle.indexOf(keyword) !== -1)
			{
				kwToAdd += ":t";
			}
			keywordsWithSource.push(kwToAdd);
		});
		return keywordsWithSource.join(',');
	};

	this.getKeywordsSorted = function (singleWordsNGram, doubleWordsNGram, tripleWordsNGram)
	{
		// Sort results by appearance frequency
		var tuples = [];
		for (var key in singleWordsNGram)
		{
			tuples.push([key, singleWordsNGram[key]]);
		}
		for (var key in doubleWordsNGram)
		{
			tuples.push([key, doubleWordsNGram[key]]);
		}
		for (var key in tripleWordsNGram)
		{
			tuples.push([key, tripleWordsNGram[key]]);
		}
		tuples.sort(function (a, b)
		{
			a = a[1];
			b = b[1];
			return a > b ? -1 : (a < b ? 1 : 0);
		});

		var keywords = tuples.map(function (e)
		{
			return e[0];
		});

		// Filter short words
		keywords = keywords.filter(function (word)
		{
			return word.length > 2;
		});
		keywords = keywords.slice(0, KEYWORDS_MAX_LIMIT);
		return ref.getClassifiedKeywordsStr(keywords);
	};

	this.sendExtraction = function (keywords)
	{
		try
		{
			var url = window.location.href;
			var xhttp = new XMLHttpRequest();
			xhttp.withCredentials = false;
			xhttp.open("POST", "https://live.sekindo.com/live/liveMatching.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("plistid=" + window.Sekindo.playlistId + "&keywords=" + encodeURIComponent(keywords) + "&url=" + encodeURIComponent(url));
		}
		catch (err)
		{}
	};

	this.run = function ()
	{
		try
		{
			var sourceAllHtml = top.document.documentElement.innerHTML;
			var sourceText = top.document.documentElement.innerText;
			var textFromMeta = [];
			var textFromTitle = [];
			var textFromHeader = [];

			// Get all meta tags
			var tags = [];
			var metaTags = sourceAllHtml.match(/<meta.+?>/g);
			if (metaTags && metaTags.length > 0)
			{
				tags = metaTags;
			}

			// Get page title
			var pageTitle = sourceAllHtml.match(/<title.+?<\/title>/);
			if (pageTitle && pageTitle.length > 0)
			{
				tags.push(pageTitle[0]);
			}

			// Get page h1
			var pageH1 = sourceAllHtml.match(/<h1.+?<\/h1>/);
			if (pageH1 && pageH1.length > 0)
			{
				tags.push(pageH1[0]);
			}

			this.wordsFromText = this.toPlainText(sourceText);
			this.processMetaTags(tags, textFromMeta, textFromTitle, textFromHeader);

			// Build the keywords histogram from page content text
			var singleWordsNGram = {};
			var doubleWordsNGram = {};
			var tripleWordsNGram = {};
			this.buildNGrams(this.wordsFromText, singleWordsNGram, doubleWordsNGram, tripleWordsNGram, PLAIN_TEXT_WORDS_WEIGHT, this.keywordsFromText);
			this.buildNGrams(this.wordsFromMeta, singleWordsNGram, doubleWordsNGram, tripleWordsNGram, META_WORDS_WEIGHT, this.keywordsFromMeta);
			this.buildNGrams(this.wordsFromTitle, singleWordsNGram, doubleWordsNGram, tripleWordsNGram, TITLE_WORDS_WEIGHT, this.keywordsFromTitle);
			this.buildNGrams(this.wordsFromHeader, singleWordsNGram, doubleWordsNGram, tripleWordsNGram, HEADER_WORDS_WEIGHT, this.keywordsFromHeader);

			keywords = this.getKeywordsSorted(singleWordsNGram, doubleWordsNGram, tripleWordsNGram);

			this.sendExtraction(keywords);
		}
		catch (err)
		{}
	}
};

setTimeout(function ()
{
	var keywordsExt = new keywordsExtraction();
	keywordsExt.run();
}, 5000);// <script type="text/javascript">

	///for IE and prebid
	if(typeof String.prototype.includes != 'function')
	{
		String.prototype.includes = function(str) {
			return (this.indexOf(str)!=-1);
		}
	}

	// Amazon A9
	!function(a9,a,p,s,t,A,g){if(a[a9])return;function q(c,r){a[a9]._Q.push([c,r])}a[a9]={init:function(){q("i",arguments)},fetchBids:function(){q("f",arguments)},setDisplayBids:function(){},targetingKeys:function(){return[]},_Q:[]};A=p.createElement(s);A.async=!0;A.src=t;g=p.getElementsByTagName(s)[0];g.parentNode.insertBefore(A,g)}("apstag",window,document,"script","//c.amazon-adsystem.com/aax2/apstag.js");

	// Player Config
	// ----------------
	var configPlayer = new Object();
	configPlayer.playerVer = '3.0.0';
	// pixels
	configPlayer.ivtHiddenPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=24&serverTime=1597416910&s=101249&sta=0&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.playerDurPeriodsPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=25&serverTime=1597416910&s=101249&sta=0&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.closeFloatPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=35&serverTime=1597416910&s=101249&sta=0&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0&flowCloseTimeout=0';
	configPlayer.viewableImpPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=36&serverTime=1597416910&s=101249&sta=0&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.viewableDurPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=42&serverTime=1597416910&s=101249&sta=0&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.gdprImpPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=43&serverTime=1597416910&s=101249&sta=0&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentStartPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=16&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentCompletePixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=18&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentClickPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=17&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentFullScreenPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=20&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentVolChangePixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=21&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentPlaylistClicksPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=22&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentScrubberPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=23&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentFullCompletePixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=29&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentVoidClickPixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=31&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentPausePixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=32&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.contentLikePixel = 'https://live.sekindo.com/live/liveView.php?njs=1&ito=1&vid_event=44&serverTime=1597416910&s=0&sta=12348228&x=728&y=90&vid_passDomain=www.guru99.com&subId=www.guru99.com&debugInformation=&isApp=0&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F80.0.3987.122%20Safari%2F537.36&csuuid=5e4a590c2f4c9&contentFileId=0&mediaPlayListId=0';
	configPlayer.attemptMultiplier =  10;
	configPlayer.schain = {"public":{"ver":"1.0","complete":1,"nodes":[{"asi":"primis.tech","sid":"28057","hp":1}]},"private":false}	//player configs
    configPlayer.debugInformation = '';
    configPlayer.volume = ".2"; // Number(0 ...1)
	configPlayer.inViewDuration = 2; // in seconds - the viewability duration for reporting "viewable" pixel.
	configPlayer.playerInViewPrc = 0.01;
	configPlayer.flowPlaylist = false;
	configPlayer.soundOnFS = true;
	configPlayer.enableBidCaching = true;
	configPlayer.lastVisibleDurationTime = 0;
	configPlayer.lastViewableDurationTime = 0;
	configPlayer.playerSimulatorCycleSec = 450;
	configPlayer.minLikesNum = 50;
	configPlayer.width = 728;
	configPlayer.height = 90;
	configPlayer.forceWidth = 0;
	configPlayer.forceHeight = 0;
	configPlayer.isAutoPlay = '4';//0 - no autoplay, 1 - autoplay, 2 - autoplay ads only, 3 - autoplay ads without content at all.
	configPlayer.isAutoSound = "0"; //0 - mute, 1 - sound
	configPlayer.playlistMultiplier = Infinity; // (0 ...Infinity) - int
	configPlayer.contentClickUrl = '';
	configPlayer.reportClickUrl = '';
	configPlayer.contentPlayList = [			{
				"fileId": "957397",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn11/video/users/converted/24485/video1523972806/vid5f367d2ed1f58414240545.mp4",
				"title": "Coda CEO on Work Productivity",
				"desc": "Aug.13 -- Shishir Mehrotra, co-founder and chief executive officer of work productivity startup Coda, discusses the company's outlook during the Covid-19 pandemic on 'Bloomberg Technology.'",
				"duration": "328",
				"bgImg": "https://video.sekindo.com/uploads/cn11/video/users/converted/24485/video1523972806/vid5f367d2ed1f58414240545.jpg?cbuster=1597406512",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embede9bd5npxztkj",
				"hlsUrl": "https://video.sekindo.com/uploads/cn11/video/users/hls/24485/video1523972806/vid5f367d2ed1f58414240545.mp4/chunklist_640.m3u8",
				"keywords": "technology,interviews,markets,business news,Industries,economic news,Emily Chang,Bloomberg Markets,Bloomberg Vid; U.S. TV Source,Bloomberg Technology,BTV YouTube Technology,Shishir Mehrotra",
				"hasCaptions": "0",
				"likes": 0,
				"views": 1489,
				"isLiked": 0
			},			{
				"fileId": "179481",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn7/video/users/converted/24485/video1523972806/vid5b87c55fe969f946397015.mp4",
				"title": "Slack CEO Says Company `Should End Up as Big as Microsoft'",
				"desc": "Aug.29 -- Slack Technologies Inc. Chief Executive Officer Stewart Butterfield talks with Bloomberg’s Emily Chang on 'Bloomberg Studio 1.0' about competition from Microsoft Corp. and the outlook for a possible initial public offering.",
				"duration": "160",
				"bgImg": "https://video.sekindo.com/uploads/cn7/video/users/converted/24485/video1523972806/vid5b87c55fe969f946397015.jpg?cbuster=1591260144",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed2bd19hjokwmn",
				"hlsUrl": "https://video.sekindo.com/uploads/cn7/video/users/hls/24485/video1523972806/vid5b87c55fe969f946397015.mp4/chunklist_640.m3u8",
				"keywords": "internet,technology,interviews,company news,Stewart Butterfield,Microsoft Corp.,Emily Chang,Bloomberg.com Web Submit,Audio/Video,BIntent Inform,Top BTV Interviews,Bloomberg Vid; U.S. TV Source,Bloomberg Technology,Initial Public Offerings,CEO Interviews,Digi Video Studio 1.0,MSFT:US,1089727D:US,Slack Technologies Inc,San Fran-Sent BN (Internal)",
				"hasCaptions": "0",
				"likes": 3,
				"views": 138771,
				"isLiked": 0
			},			{
				"fileId": "306303",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e828bff9380311002.mp4",
				"title": "The Week's Top Stories: Amazon Ditches NYC, and Facebook Fine",
				"desc": "From Wall Street to Silicon Valley, these are the top stories that moved markets and had investors, business leaders, and entrepreneurs talking this week on Cheddar.",
				"duration": "126",
				"bgImg": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e828bff9380311002.jpg?cbuster=1591260249",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed4ac7fgmtlorw",
				"hlsUrl": "https://video.sekindo.com/uploads/cn3/video/users/hls/24485/video_5c74e337b0b1c456249184/vid5c7d3e828bff9380311002.mp4/master_640.m3u8",
				"keywords": "retail,facebook,Amazon,FTC,President Trump,Activision,layoffs,border wall,national emergency,Amazon HQ2,Fortnite,border funding,sponsored-applenews",
				"hasCaptions": "1",
				"likes": 2,
				"views": 122082,
				"isLiked": 0
			},			{
				"fileId": "306301",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e7d50c00195383950.mp4",
				"title": "Foldable Phone Wars Begin... But Who Will Win?",
				"desc": "The foldable phone wars have taken off, with early contenders Samsung and Huawei battling for the top spot. Austin Powell, managing editor at The Daily Dot, discusses the major players.",
				"duration": "291",
				"bgImg": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e7d50c00195383950.jpg?cbuster=1591260249",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed4ac7dxyohwkz",
				"hlsUrl": "https://video.sekindo.com/uploads/cn3/video/users/hls/24485/video_5c74e337b0b1c456249184/vid5c7d3e7d50c00195383950.mp4/master_640.m3u8",
				"keywords": "technology,business,smartphones,Samsung,Xiaomi,Huawei,Foldable phone,folding phones",
				"hasCaptions": "1",
				"likes": 0,
				"views": 130587,
				"isLiked": 0
			},			{
				"fileId": "306300",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e7bec53a823843948.mp4",
				"title": "Motorola, Device Manufacturers Push for 5G at Mobile World Congress",
				"desc": "The popularity of 5G devices at this week's Mobile World Congress shows that device manufacturers, networks, and even nations are aggressively pushing for 5G, more so than for past generations of wireless, Doug Michau, head of U.S. product operations at Motorola told Cheddar.",
				"duration": "120",
				"bgImg": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e7bec53a823843948.jpg?cbuster=1591260249",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed4ac7csyhxtjq",
				"hlsUrl": "https://video.sekindo.com/uploads/cn3/video/users/hls/24485/video_5c74e337b0b1c456249184/vid5c7d3e7bec53a823843948.mp4/master_640.m3u8",
				"keywords": "technology,business,Motorola,5g,clipedit",
				"hasCaptions": "1",
				"likes": 0,
				"views": 151426,
				"isLiked": 0
			},			{
				"fileId": "306299",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e7a1fccb327028434.mp4",
				"title": "Rush to 5G is Faster Than for Past Generations of Wireless, Motorola Exec Says",
				"desc": "There's a greater push for 5G among device manufacturers, networks, and even nations than for past generations of wireless, Doug Michau, head of U.S. product operations at Motorola told Cheddar. 'If you look at just what happened between \[Consumer Electronics Showcase\] and \[Mobile World Congress\], you went from four devices announced to over 20 devices announced, just in the period of about six weeks,' Michau said. 'We are seeing a greater push I think on this generation of wireless than I think we have in the past.' Motorola isn't waiting out the game. The company just got certification in mid-February from the Federal Communications Commission for its 5G Moto Mod, which would enable select phones to upgrade to 5G.",
				"duration": "120",
				"bgImg": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e7a1fccb327028434.jpg?cbuster=1591260249",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed4ac7bqyxvpwh",
				"hlsUrl": "https://video.sekindo.com/uploads/cn3/video/users/hls/24485/video_5c74e337b0b1c456249184/vid5c7d3e7a1fccb327028434.mp4/master_640.m3u8",
				"keywords": "technology,business,Motorola,5g",
				"hasCaptions": "1",
				"likes": 1,
				"views": 237731,
				"isLiked": 0
			},			{
				"fileId": "306298",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e7816858641838234.mp4",
				"title": "How IBM Is Building A.I. That's Robust, Unbiased & Secure",
				"desc": "Jesus Mantas,  managing partner at IBM's Global Business Services unit, spoke to Cheddar from the Mobile World Congress in Barcelona, about how Big Blue is building artificial intelligence systems for consumer and business applications.",
				"duration": "160",
				"bgImg": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e7816858641838234.jpg?cbuster=1591260249",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed4ac7akyoqrlu",
				"hlsUrl": "https://video.sekindo.com/uploads/cn3/video/users/hls/24485/video_5c74e337b0b1c456249184/vid5c7d3e7816858641838234.mp4/master_640.m3u8",
				"keywords": "technology,business,IBM,data,GE,AI,bias",
				"hasCaptions": "1",
				"likes": 3,
				"views": 329682,
				"isLiked": 0
			},			{
				"fileId": "306310",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e92779f6969954552.mp4",
				"title": "Your Favorite Delivery Restaurant May Not Actually Exist",
				"desc": "With the rise of delivery services has come the rise of Ghost Restaurants which will cook your food and deliver it, but you'd never be able to order 'for here'.",
				"duration": "286",
				"bgImg": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7d3e92779f6969954552.jpg?cbuster=1591260249",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed4ac86ngojswp",
				"hlsUrl": "https://video.sekindo.com/uploads/cn3/video/users/hls/24485/video_5c74e337b0b1c456249184/vid5c7d3e92779f6969954552.mp4/master_640.m3u8",
				"keywords": "restaurants,food,Delivery,cheddar originals,cheddar sidebar",
				"hasCaptions": "1",
				"likes": 1,
				"views": 321508,
				"isLiked": 0
			},			{
				"fileId": "307793",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn2/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7ebe9d689a1376805559.mp4",
				"title": "A New Option for Investors Wanting to Get In On the Hot 'PULPS' IPOs",
				"desc": "Watch out FAANG stocks, the new group of hot stocks are the PULPS. The PULPS stocks ー Pinterest Uber, Lyft, Postmates, and Slack ー are the highest profile companies expected to IPO in 2019, with Lyft expected to be the first to go public this month. IBillionaire is looking to capitalize on investor interest by offering a portfolio option that will give investors access to these hot IPOs.",
				"duration": "133",
				"bgImg": "https://video.sekindo.com/uploads/cn2/video/users/converted/24485/video_5c74e337b0b1c456249184/vid5c7ebe9d689a1376805559.jpg?cbuster=1591260257",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed4b251mrhngov",
				"hlsUrl": "https://video.sekindo.com/uploads/cn2/video/users/hls/24485/video_5c74e337b0b1c456249184/vid5c7ebe9d689a1376805559.mp4/master_640.m3u8",
				"keywords": "technology,stocks,business,markets,Uber,IPO,Postmates,Slack,Lyft,pinterest,clipedit",
				"hasCaptions": "1",
				"likes": 1,
				"views": 114500,
				"isLiked": 0
			},			{
				"fileId": "231524",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn4/video/users/converted/24485/video1523972806/vid5be65db1915d9867842324.mp4",
				"title": "Blockchain Can Change the Internet's Infrastructure, Block.One CEO Says",
				"desc": "Nov.09 -- Brendan Blumer, Block.One co-founder and chief executive officer, discusses the rapid rise and fall of initial coin offerings with Bloomberg's Caroline Hyde and Joe Weisenthal on 'Bloomberg Markets: What'd You Miss?'",
				"duration": "380",
				"bgImg": "https://video.sekindo.com/uploads/cn4/video/users/converted/24485/video1523972806/vid5be65db1915d9867842324.jpg?cbuster=1591260175",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed38864rsukjyx",
				"hlsUrl": "https://video.sekindo.com/uploads/cn4/video/users/hls/24485/video1523972806/vid5be65db1915d9867842324.mp4/chunklist_640.m3u8",
				"keywords": "technology,markets,currencies,Bitcoin,digital currency,blockchain,Cryptocurrencies,cryptocurrency,initial coin offerings,ICOS,Bloomberg.com Web Submit,Audio/Video,Digi Video; Multi Biz Vert,BIntent Inform,Full Length Interview,Bloomberg Vid; U.S. TV Source,What&amp;#039;d You Miss TV,Joseph Weisenthal,Caroline Hyde,CEO Interviews,Foreign Exchange Comments,Brendan Blumer",
				"hasCaptions": "0",
				"likes": 2,
				"views": 339589,
				"isLiked": 0
			},			{
				"fileId": "236469",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn2/video/users/converted/24485/video1523972806/vid5bef689ef13a1872382317.mp4",
				"title": "How ESports Betting Platform Unikrn Utilizes Crypto",
				"desc": "Nov.16 -- Rahul Sood, Unikrn Inc. chief executive officer, explains how the eSports betting platform utilizes crypto to let people easily bet on games ranging from Fortnite to Dota 2. He speaks with Bloomberg's Romaine Bostick, Lisa Abramowicz and Taylor Riggs on 'Bloomberg Markets: What'd You Miss?'",
				"duration": "368",
				"bgImg": "https://video.sekindo.com/uploads/cn2/video/users/converted/24485/video1523972806/vid5bef689ef13a1872382317.jpg?cbuster=1591260178",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed39bb5hjmnuql",
				"hlsUrl": "https://video.sekindo.com/uploads/cn2/video/users/hls/24485/video1523972806/vid5bef689ef13a1872382317.mp4/chunklist_640.m3u8",
				"keywords": "technology,interviews,sports,markets,casino,Video Games,business news,Esports,Sports Betting,blockchain,Gambling,Cryptocurrencies,cryptocurrency,Bloomberg.com Web Submit,Audio/Video,Digi Video; Multi Biz Vert,BIntent Inform,Full Length Interview,Bloomberg Vid; U.S. TV Source,What&amp;#039;d You Miss TV,CEO Interviews,Lisa Abramowicz,Taylor Riggs,Video; Computer Games,Casinos; Gaming,Romaine Bostick,Rahul Sood",
				"hasCaptions": "0",
				"likes": 1,
				"views": 346001,
				"isLiked": 0
			},			{
				"fileId": "238957",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video1523972806/vid5bf4da481fe29047551241.mp4",
				"title": "Why Cryptocurrencies Keep Crashing",
				"desc": "Nov.20 -- Chris Burniske, Placeholder Management partner, discusses the November downturn for crypto assets with Bloomberg's Joe Weisenthal, Caroline Hyde and Romaine Bostick on 'Bloomberg Markets: What'd You Miss?'",
				"duration": "211",
				"bgImg": "https://video.sekindo.com/uploads/cn3/video/users/converted/24485/video1523972806/vid5bf4da481fe29047551241.jpg?cbuster=1591260180",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed3a56dmxjlowq",
				"hlsUrl": "https://video.sekindo.com/uploads/cn3/video/users/hls/24485/video1523972806/vid5bf4da481fe29047551241.mp4/chunklist_640.m3u8",
				"keywords": "technology,interviews,markets,Top News,currencies,business news,Bitcoin,blockchain,Cryptocurrencies,tether,cryptocurrency,Chris Burniske,Digital Currencies,ethereum,ICOS,Bloomberg.com Web Submit,Audio/Video,Digi Video; Multi Biz Vert,BIntent Inform,Full Length Interview,Bloomberg Vid; U.S. TV Source,What&amp;#039;d You Miss TV,Joseph Weisenthal,Caroline Hyde,XBT:CUR,Foreign Exchange Comments,Romaine Bostick,FX Trading",
				"hasCaptions": "0",
				"likes": 0,
				"views": 374335,
				"isLiked": 0
			},			{
				"fileId": "238818",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn2/video/users/converted/24485/video1523972806/vid5bf4a9a6b503b069588755.mp4",
				"title": "Why Crypto Assets Keep Falling",
				"desc": "Nov.20 -- Chris Burniske, Placeholder Management partner, discusses the November downturn for crypto assets with Bloomberg's Joe Weisenthal, Caroline Hyde and Romaine Bostick on 'Bloomberg Markets: What'd You Miss?'",
				"duration": "211",
				"bgImg": "https://video.sekindo.com/uploads/cn2/video/users/converted/24485/video1523972806/vid5bf4a9a6b503b069588755.jpg?cbuster=1591260180",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed3a4e2jomshlr",
				"hlsUrl": "https://video.sekindo.com/uploads/cn2/video/users/hls/24485/video1523972806/vid5bf4a9a6b503b069588755.mp4/chunklist_640.m3u8",
				"keywords": "technology,interviews,markets,currencies,business news,Bitcoin,blockchain,Cryptocurrencies,cryptocurrency,Chris Burniske,ethereum,ICOS,Bloomberg.com Web Submit,Audio/Video,Digi Video; Multi Biz Vert,BIntent Inform,Full Length Interview,Bloomberg Vid; U.S. TV Source,What&amp;#039;d You Miss TV,Joseph Weisenthal,Caroline Hyde,XBT:CUR,Foreign Exchange Comments,Romaine Bostick",
				"hasCaptions": "0",
				"likes": 0,
				"views": 278044,
				"isLiked": 0
			},			{
				"fileId": "247072",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn1/video/users/converted/24485/video1523972806/vid5c06032da3c67691417758.mp4",
				"title": "SpaceX Launches More Than 60 Satellites Into Orbit",
				"desc": "Dec.03 -- SpaceX launched a Falcon 9 rocket from California that is carrying 64 small satellites into orbit. The payloads are from 17 different countries, including the U.S., Brazil and India.",
				"duration": "80",
				"bgImg": "https://video.sekindo.com/uploads/cn1/video/users/converted/24485/video1523972806/vid5c06032da3c67691417758.jpg?cbuster=1591260187",
				"clkUrl": "",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed3c520ytixnuk",
				"hlsUrl": "https://video.sekindo.com/uploads/cn1/video/users/hls/24485/video1523972806/vid5c06032da3c67691417758.mp4/chunklist_640.m3u8",
				"keywords": "technology,science,transportation,Elon Musk,Tesla,Nasa,Falcon 9,Space Exploration,editors&amp;#039; picks,Bloomberg.com Web Submit,Audio/Video,BTV Twitter Videos,Bloomberg Vid; U.S. TV Source,BTV YouTube Technology,BTV Youtube Video,2059939Z:LN,SpaceX C&amp;amp;M Ltd.,Aerospace; Defense,TOP Technology Stories",
				"hasCaptions": "0",
				"likes": 4,
				"views": 212088,
				"isLiked": 0
			},			{
				"fileId": "375569",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn2/video/users/converted/28057/video_5cdbf6801b932458663923/vid5cdbf6e5600df068679197.mp4",
				"title": "What is SAP Why do we need ERP Beginner Tutorial",
				"desc": "SAP stands for Systems Applications and Products in Data Processing. The following video will explain the need of an ERP software like SAP in an enterprise",
				"duration": "485",
				"bgImg": "https://video.sekindo.com/uploads/cn2/video/users/converted/28057/video_5cdbf6801b932458663923/vid5cdbf6e5600df068679197.jpg?cbuster=1591786010",
				"clkUrl": "https://www.guru99.com/what-is-sap-definition-of-sap-erp-software.html",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed5bb11jqxvtor",
				"hlsUrl": "https://video.sekindo.com/uploads/cn2/video/users/hls/28057/video_5cdbf6801b932458663923/vid5cdbf6e5600df068679197.mp4/chunklist_640.m3u8",
				"keywords": "",
				"hasCaptions": "0",
				"likes": 7,
				"views": 932475,
				"isLiked": 0
			},			{
				"fileId": "375589",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn1/video/users/converted/28057/video_5cdbf6801b932458663923/vid5cdbfb4d4f37a820685667.mp4",
				"title": "Seven Testing Principles Software Testing",
				"desc": "Seven Testing Principles: This tutorial introduces the seven basic principles of Software Testing every professional Software tester and QA professional should know.",
				"duration": "302",
				"bgImg": "https://video.sekindo.com/uploads/cn1/video/users/converted/28057/video_5cdbf6801b932458663923/vid5cdbfb4d4f37a820685667.jpg?cbuster=1591786010",
				"clkUrl": "https://www.guru99.com/software-testing-seven-principles.html",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed5bb25prvzykl",
				"hlsUrl": "https://video.sekindo.com/uploads/cn1/video/users/hls/28057/video_5cdbf6801b932458663923/vid5cdbfb4d4f37a820685667.mp4/chunklist_640.m3u8",
				"keywords": "",
				"hasCaptions": "0",
				"likes": 18,
				"views": 1319484,
				"isLiked": 0
			},			{
				"fileId": "375590",
				"playListId": "4787",
				"contentMatch": "",
				"url": "https://video.sekindo.com/uploads/cn1/video/users/converted/28057/video_5cdbf6801b932458663923/vid5cdbfb5191969194875315.mp4",
				"title": "What is JVM (Java Virtual Machine) with Architecture JAVA Programming Tutorial",
				"desc": "JVM is a engine that provides runtime environment to drive the Java Code or applications. It converts Java bytecode into machines language. JVM is a part of JRE(Java Run Environment). It stands for Java Virtual Machine",
				"duration": "145",
				"bgImg": "https://video.sekindo.com/uploads/cn1/video/users/converted/28057/video_5cdbf6801b932458663923/vid5cdbfb5191969194875315.jpg?cbuster=1591786010",
				"clkUrl": "https://www.guru99.com/java-virtual-machine-jvm.html",
				"shareUrl": "https://www.guru99.com/angularjs-scope.html?primis_content=embed5bb26vqmgxol",
				"hlsUrl": "https://video.sekindo.com/uploads/cn1/video/users/hls/28057/video_5cdbf6801b932458663923/vid5cdbfb5191969194875315.mp4/chunklist_640.m3u8",
				"keywords": "",
				"hasCaptions": "0",
				"likes": 5,
				"views": 736832,
				"isLiked": 0
			}];
	configPlayer.encoderUrl = 'https://live.sekindo.com/live/liveJsonVid.php?vidUrl=[TARGET]&origin=[ORIGIN]';
	configPlayer.absolutePath = 'https://live.sekindo.com';
	configPlayer.verificationAndSyncPixels = [{"type":"img","pixel":"https:\/\/pixel.quantserve.com\/pixel\/p-1ZHFxK2kGG5Cz.gif?labels=publisher.28057.space.101249,adsize.728x90"}];
	configPlayer.domain = 'www.guru99.com';
	configPlayer.pubUrl = 'https://www.guru99.com/angularjs-scope.html';
	configPlayer.videoDomain = 'video.sekindo.com';
	configPlayer.isAmpProject = false;
	configPlayer.isAmpStickyAd = false;
	configPlayer.playerApiId = '';
	configPlayer.autoSkipContentConfig = {"isEnable":1,"skipContentAfterSec":30};
	configPlayer.allowFSPlaylist = true;
	// ads
	configPlayer.requestLifetime = 360; //minutes
	configPlayer.requestLifetimeNV = 160;
	configPlayer.waterFall = 'https://live.sekindo.com/live/liveView.php?s=58057&vid_vastTimeout=-1&vid_vastType=3&vid_playerVer=3.0.0&vid_viewabilityState=${VP_VIEWABILITY_STATE}&vid_content_url=https%3A%2F%2Fvideo.sekindo.com%2Fuploads%2Fcn11%2Fvideo%2Fusers%2Fconverted%2F24485%2Fvideo1523972806%2Fvid5f367d2ed1f58414240545.mp4&vid_content_id=957397&vid_content_desc=Coda+CEO+on+Work+Productivity&vid_content_title=Coda+CEO+on+Work+Productivity&vid_content_duration=328&debugInformation=&x=728&y=90&fpl=0&pubUrl=https%3A%2F%2Fwww.guru99.com%2Fangularjs-scope.html&ri=6C69766553746174737C736B317B54307D7B64323032302D30382D31345F31377D7B7331323334383232387D7B433235327D7B53643364334C6D6431636E55354F53356A6232303D7D7B626368726F6D657D7B716465736B746F707D7B6F77696E646F77737D7B583732387D7B5939307D7B66367D7B4C353332387DFEFE&isApp=0&geoLati=-33.9167&geoLong=18.4167&userIpAddr=197.229.6.205&userUA=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F80.0.3987.122+Safari%2F537.36&csuuid=5e4a590c2f4c9&cbuster=${CBUSTER}';
	configPlayer.adsSchedule = {"pre_roll":1,"mid_roll":[],"gap":{"attGap":0,"impGap":2}};
	configPlayer.videoPubCosts = {"pubRevshare":0,"servingFee":0,"isServingFeeRevshare":false};
	// player html structure params
	configPlayer.containerDiv = containerDiv;
	configPlayer.flowCloseBtnIframe = flowCloseBtnIframe;
	configPlayer.nativeSkinIframeWindow = nativeSkinIFrameWindow;
	configPlayer.nativeSkinIframe = nativeSkinIframe;

    if ((configPlayer.debugInformation.indexOf("playerWoFrames") != -1 && configPlayer.debugInformation.indexOf("/ on") != -1) || configPlayer.pubUrl.toLowerCase().indexOf("newpolicy") != -1)
	{
		configPlayer.playerIframeDiv = playerIframeDiv;
		configPlayer.rootDocument = rootDocument;
		configPlayer.rootWindow = rootWindow;
	}
	else
	{
		configPlayer.playerIframeElement = playerIframe;
		configPlayer.playerIframeWindow = playerIframe.contentWindow || playerIframe.contentDocument.defaultView;
		configPlayer.playerIframeDocument = playerIframe.contentWindow.document || playerIframe.contentWindow.document.documentElement;
	}
	configPlayer.windowParentDocument = windowParentDocument || window.parent.document;
	// outstream/flow/sticky configs
	configPlayer.flowMode = 'seenboth';
	configPlayer.flowWidth = 402;
	configPlayer.flowHeight = 229;
	configPlayer.iframeSizeImportant = false;
	configPlayer.sliderDir = 'br'; // br(bottom-right), bl(bottom-left), bs(bottom-streach)
	configPlayer.sliderOffset = 10;
	configPlayer.sliderSideOffset = 10;
	configPlayer.isCloseBtn = true;
	configPlayer.closeBtnPos = 'right';
	configPlayer.allowFloatingShadow = true;
	configPlayer.closeBtnTheme = {'lineColor' : '#000000', 'backColor' : '#ffffff', 'opacity' : '0.25' };
	configPlayer.flowDragEnabled = 1;
	configPlayer.disableFlowPlayer = true;
	//template and skin configs
	configPlayer.skin = 'slickSkin';
	configPlayer.isApp = false;
	configPlayer.playerMode = 'flow';
	configPlayer.allowFullScreen = true;
	configPlayer.minOptimalHeight = 168;
	configPlayer.playerTemplateData = {"isLightBox":1,"isAutoSound":0,"isShareBtn":1,"isPrimisLogo":0,"isNextBackBtns":1,"skipXsec":1,"goToArticleText":"GO TO ARTICLE","isResponsive":false,"designColor":"#2CBAFF","quality":480,"hasPlaylist":0,"isPauseNonViewable":true,"showTitle":1,"isCaptionsOn":1,"isShowViews":1,"isCloseButtonLeft":0,"isShowPlaylistNowPlaying":1,"loadDefaultFont":true,"fontFamilySize":"12","fontFamilyLink":"https:\/\/fonts.googleapis.com\/css?family=Roboto&display=swap","fontFamilyName":"Roboto","closeBtnWidth":"16px","closeBtnHeight":"16px","clickUrlTarget":"_top","logoUrl":""};
	configPlayer.useMarginTop = true;
	configPlayer.responsive = false;
	configPlayer.externRules = [{element:1, style:{'margin':'auto'}}];
	configPlayer.flowSkinWrap = '';
	configPlayer.isNativeTemplate = true;
	configPlayer.isPrimisNativeSkin = true;
	configPlayer.primisSkinParams = {"css":" .Large-unit{background-color:#ffffff!important;} #titleContainer{color:#2CBAFF!important;} .thumbnail-title{color:#2CBAFF!important;font-size:14px;} #descriptionContainer{color:#2CBAFF!important;} .thumbnail-desc{color:#2CBAFF!important;font-size:12px;} .main-title{font-size:12px;} .title-box{font-size:16px;} .description-box{font-size:12px;} .read-more{font-size:10px;} .related-items{font-size:12px;} .thumbnail-read-more{font-size:10px;}","evenColsDataType":"thumbs","largeUnitBgColor":"#ffffff","skinTitleTextColor":"#2CBAFF","skinDescTextColor":"#2CBAFF","skinWidth":690,"mainTitle":"FEATURED VIDEOS","fontName":"","fontSize":"12","fontLinks":"","isPrimisLogo":false,"primisLogoOn":false,"thumbsColsNum":1,"thumbsColsPosition":"right","isResponsive":0};
	configPlayer.verticalOrientation = false;
	configPlayer.voidClickAction = 'none';
	configPlayer.publisherLogoPosition = "left";
	// vpaid behavior
	configPlayer.blacklistIframe = ["ct.tubemogul.com","s0.2mdn.net\/ads\/richmedia","serving-sys.com\/BurstingRes\/Site-8983\/WSFolders\/112","viewbix.com\/frame\/"];
	configPlayer.blockVpaidjsTube = false;
	configPlayer.blockVpaidjsYahoo = false;
	//Debug params
	configPlayer.debug = '';
	configPlayer.demandDebug = [];
	configPlayer.debugSessionId = '';
	//Client side detected configs
	configPlayer.clientInfo = {"extra":{"schemaVer":"11","os":"Windows","osVersion":"10.0","osVersionMajor":"10","osVersionMinor":"0","deviceManufacturer":"","deviceModel":"","deviceCodeName":"","deviceType":"desktop","browser":"Chrome","browserType":"browser","browserVersion":"80.0.3987.122","browserVersionMajor":"80","browserVersionMinor":"0"},"browser":"chrome","os":"windows","osVer":"","deviceType":"desktop"};
	configPlayer.hls = supportDetection.hlsType; // native/hlsJs/0/-1
	configPlayer.vidType = supportDetection.playerType; // native/iosWrapper
	configPlayer.sharedVideoParameterName ='primis_content'

	//GDPR
	configPlayer.gdprIsRequired = 0;
	configPlayer.gdprInfo = supportDetection.gdprInfo;
	configPlayer.ccpaIsRequired = 0;
	configPlayer.ccpaInfo = supportDetection.ccpaInfo;

	// Policies
	configPlayer.isRealPrerollEnabled = 1;
	configPlayer.isDoublePreroll = 1;
	configPlayer.c2pWaitTime = 10;

	//PLAYER
	var randName = 'SekindoSPlayer5f36a5ceeb98c';
	window[randName] = new SekindoSPlayer(configPlayer, randName);
