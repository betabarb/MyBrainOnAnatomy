mboa.filter('isTrusted', function($sce) {
  return function(text) {
    return $sce.trustAsHtml(text);
  };
});

mboa.filter('stripSlug', function() {
  return function(text) {
    if (text) var newText = text.replace(/-/g, " ");
    return newText;
  };
});