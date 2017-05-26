
var $editor = document.querySelector('.js-reportsEditor');

if ($editor) {
    CodeMirror.defineMode("htmltwig", function(config, parserConfig) {
        return CodeMirror.overlayMode(CodeMirror.getMode(config, parserConfig.backdrop || "text/html"), CodeMirror.getMode(config, "twig"));
    });

    var cmInstance = CodeMirror.fromTextArea($editor, {
        mode: 'twig',
        lineNumbers: true,
        indentUnit: 4,
    });
}