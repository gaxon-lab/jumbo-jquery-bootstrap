<!-- Page Header -->
<div class="dt-page__header">
    <h1 class="dt-page__title">Code Editor - Code Mirror</h1>
</div>
<!-- /page header -->

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-12">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Editor - Theme Default</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body">

                <form><textarea id="code-2" name="code">
window.onload = function() {
  var te = document.getElementById("code");
  var sc = document.getElementById("script");
  te.value = (sc.textContent || sc.innerText || sc.innerHTML).replace(/^\s*/, "");
  sc.innerHTML = "";
  var te_html = document.getElementById("code-html");
  te_html.value = "<html>\n  " + document.documentElement.innerHTML + "\n</html>";

  var foldFunc = CodeMirror.newFoldFunction(CodeMirror.braceRangeFinder);
  window.editor = CodeMirror.fromTextArea(te, {
    mode: "javascript",
    lineNumbers: true,
    lineWrapping: true,
    onGutterClick: foldFunc,
    extraKeys: {"Ctrl-Q": function(cm){foldFunc(cm, cm.getCursor().line);}}
  });
  foldFunc(editor, 9);
  foldFunc(editor, 20);

  var foldFunc_html = CodeMirror.newFoldFunction(CodeMirror.tagRangeFinder);
  window.editor_html = CodeMirror.fromTextArea(te_html, {
    mode: "text/html",
    lineNumbers: true,
    lineWrapping: true,
    onGutterClick: foldFunc_html,
    extraKeys: {"Ctrl-Q": function(cm){foldFunc_html(cm, cm.getCursor().line);}}
  })
  foldFunc_html(editor_html, 1);
  foldFunc_html(editor_html, 15);
};
                    </textarea></form>

            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-12">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Editor - Theme blackboard</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body">

                <form><textarea id="code-1" name="code">
function getCompletions(token, context) {
  var found = [], start = token.string;
  function maybeAdd(str) {
    if (str.indexOf(start) == 0) found.push(str);
  }
  function gatherCompletions(obj) {
    if (typeof obj == "string") forEach(stringProps, maybeAdd);
    else if (obj instanceof Array) forEach(arrayProps, maybeAdd);
    else if (obj instanceof Function) forEach(funcProps, maybeAdd);
    for (var name in obj) maybeAdd(name);
  }

  if (context) {
    // If this is a property, see if it belongs to some object we can
    // find in the current environment.
    var obj = context.pop(), base;
    if (obj.className == "js-variable")
      base = window[obj.string];
    else if (obj.className == "js-string")
      base = "";
    else if (obj.className == "js-atom")
      base = 1;
    while (base != null && context.length)
      base = base[context.pop().string];
    if (base != null) gatherCompletions(base);
  }
  else {
    // If not, just look in the window object and any local scope
    // (reading into JS mode internals to get at the local variables)
    for (var v = token.state.localVars; v; v = v.next) maybeAdd(v.name);
    gatherCompletions(window);
    forEach(keywords, maybeAdd);
  }
  return found;
}
                    </textarea></form>

            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

</div>
<!-- /grid -->