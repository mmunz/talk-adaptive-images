var delay;
// Initialize CodeMirror editor with a nice html5 canvas demo.
var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
    mode: 'text/html',
    noScriptCaching: true,
    theme: 'cobalt',
    lineNumbers: true,
});

editor.on("change", function () {
    clearTimeout(delay);
    delay = setTimeout(updatePreview, 300);
});

function wrapHTML($content) {
    var html = "<!doctype html>\n<html style=\"overflow-y: scroll\">";
    html += $content;
    html += "<script src=\"/assets/js/examples-debug.js\"></script>";
    html += "</html>";
    return html;

}

function updatePreview() {
    var previewFrames = ['preview-mobile', 'preview-desktop'];
    previewFrames.forEach(function(id) {
        var previewFrame = document.getElementById(id);
        var preview = previewFrame.contentWindow.document;
        preview.open();
        preview.write(wrapHTML(editor.getValue()));
        preview.close();
    })
}

// let widthObserver = new MutationObserver(function(mutations) {
//     if (mutations[0]['attributeName'] === 'style') {
//         updatePreview();
//     }
//     console.log(mutations[0]);
// });
//
// let previewMobile = document.getElementsByClassName('preview__mobile')[0];
// widthObserver.observe(previewMobile, { attributes: true });

setTimeout(updatePreview, 300);

// var nav = document.getElementById('nav');
// nav.onchange(function() {
//     window.location.href = this.value;
// });

