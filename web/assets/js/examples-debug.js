// {
//
//     var bindEvent = function bindEvent(el, eventName, eventHandler) {
//         if (el.addEventListener) {
//             el.addEventListener(eventName, eventHandler, false);
//         } else if (el.attachEvent) {
//             el.attachEvent('on' + eventName, eventHandler);
//         }
//     };
//
//
//     var getImageDimensions = function getImageDimensions(imgEl) {
//
//         var src = imgEl.currentSrc || imgEl.src;
//         var t = new Image();
//         t.src = src;
//         return {
//             'src': src,
//             'width': t.width,
//             'height': t.height,
//             'ratio': (t.height / t.width * 100).toFixed(2)
//         };
//     };
//
//     var addDebugMessage = function addDebugMessage(imgEl, data) {
//         var parent = imgEl.parentNode;
//
//         var msg = document.createElement('ul');
//
//         var elementWidth = document.createElement('li');
//         elementWidth.appendChild(document.createTextNode('container: ' + data.elementWidth));
//
//         var currentSrcWidth = document.createElement('li');
//         currentSrcWidth.appendChild(document.createTextNode('current: ' + data.currentSrcWidth + 'x' + data.currentSrcHeight + ' (' + data.ratio + ')'));
//
//         msg.appendChild(currentSrcWidth);
//         msg.appendChild(elementWidth);
//
//         if (typeof parent.getElementsByClassName('img-debug')[0] === "undefined") {
//             var container = document.createElement("div");
//             container.setAttribute('class', 'img-debug');
//             container.appendChild(msg);
//             // check if parent has an img tag. If so, place the element after the img, else at the end of the parent
//             var imgTag = parent.getElementsByTagName('img')[0];
//             if (imgTag !== "undefined" ) {
//                 imgTag.parentNode.insertBefore(container, imgTag.nextSibling);
//
//             } else {
//                 parent.appendChild(container);
//             }
//         } else {
//             var debugContainer = parent.getElementsByClassName('img-debug')[0];
//             debugContainer.replaceChild(msg, debugContainer.childNodes[0]);
//         }
//     };
//
//     window.observe = function (imgEl) {
//         console.log(imgEl);
//         var action = function action() {
//             var dimensions = getImageDimensions(imgEl);
//             var parent = imgEl.parentNode;
//             var data = {
//                 currentSrc: imgEl.currentSrc || imgEl.src,
//                 currentSrcWidth: dimensions.width,
//                 currentSrcHeight: dimensions.height,
//                 ratio: dimensions.ratio,
//                 elementWidth: imgEl.width,
//                 html: parent.outerHTML
//             };
//             addDebugMessage(imgEl, data);
//         };
//         // img is already loaded, so call once here
//         action();
//
//         // srcset has been replaced by lazyloader
//         bindEvent(imgEl, 'load', function () {
//             action();
//         });
//
//         bindEvent(imgEl, 'resize', function () {
//             action();
//         });
//
//     };
//
//     var image = document.querySelectorAll('img')[0];
//     observe(image);
//
// }

var imgResources = [];

function getResources() {
    imgResources = [];
    var resources = window.performance.getEntriesByType("resource");
    resources.forEach(function (resource) {
        if (resource.initiatorType === 'img') {
            console.log(resource);
            imgResources.push(resource);
        }
    });
    return resources;
}

function addImgSizeInfo() {
    var sumSize = 0;
    imgResources.forEach(function(imgResource) {
        sumSize = sumSize + imgResource.transferSize
    });
    var sizeTotal = document.createElement('div');
    sizeTotal.appendChild(document.createTextNode('Total img size: ' + sumSize + ' | Loaded images: ' + imgResources.length ));
    body = document.getElementsByTagName('body')[0];
    body.appendChild(sizeTotal);
}

function everythingLoaded() {
}

var bindEvent = function bindEvent(el, eventName, eventHandler) {
    if (el.addEventListener) {
        el.addEventListener(eventName, eventHandler, false);
    } else if (el.attachEvent) {
        el.attachEvent('on' + eventName, eventHandler);
    }
};

window.addEventListener('load', function(){
    everythingLoaded();
});

window.observe = function (imgEl) {
    var action = function action() {
        getResources();
        addImgSizeInfo();
    };
    // img is already loaded, so call once here
    action();

    // srcset has been replaced by lazyloader
    bindEvent(imgEl, 'load', function () {
        action();
    });

    bindEvent(imgEl, 'resize', function () {
        action();
    });

};

var images = document.querySelectorAll('img');
for (var i = 0; i < images.length; i++) {
    observe(images[i]);
}
