//bricklayer options - homepage
var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))

bricklayer.on("breakpoint", function (e) {
  console.log(e.detail.columnCount);
})
//bricklayer options - homepage