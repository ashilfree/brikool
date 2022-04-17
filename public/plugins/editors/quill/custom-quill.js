// Basic

var quill = new Quill('#editor-container', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image', 'code-block']
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'  // or 'bubble'
});




var quill = new Quill('#editor-container2', {
    modules: {
        toolbar: [
            [{ header: [1, 2, false] }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
        ]
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'  // or 'bubble'
});

var editor1 = document.querySelector('#editor-container .ql-editor');
var editor2 = document.querySelector('#editor-container2 .ql-editor');
var textarea1 = document.getElementById('textarea1');
var textarea2 = document.getElementById('textarea2');
editor1.addEventListener('DOMSubtreeModified', myFunction);
editor2.addEventListener('DOMSubtreeModified', myFunction2);

function myFunction(e) {
    textarea1.value = editor1.innerHTML;
}

function myFunction2(e) {
    textarea2.value = editor2.innerHTML;
}
