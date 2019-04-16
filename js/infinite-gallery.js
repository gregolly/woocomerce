document.addEventListener('DOMContentLoaded', function() {
  var stream = document.querySelector('.testimony_stream');
  var items = document.querySelectorAll('.testimony_item');
  var prev = document.querySelector('.testimony_prev');
  var next = document.querySelector('.testimony_next');

  prev.addEventListener('click', function() {
    stream.insertBefore(items[items.length - 1], items[0]);
    items = document.querySelectorAll('.testimony_item');
  });

  next.addEventListener('click', function() {
    stream.appendChild(items[0]);
    items = document.querySelectorAll('.testimony_item');
  });
});