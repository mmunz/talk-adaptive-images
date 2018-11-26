var delay;
// Initialize CodeMirror editor with a nice html5 canvas demo.
var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
    mode: 'text/html'
});

editor.on("change", function () {
    clearTimeout(delay);
    delay = setTimeout(updatePreview, 300);
});

function wrapHTML($content) {
    var html = "<!doctype html>\n<html>";
    html += $content;
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

setTimeout(updatePreview, 300);

// var nav = document.getElementById('nav');
// nav.onchange(function() {
//     window.location.href = this.value;
// });