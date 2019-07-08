// $(document).ready(function(){

// 	function heightBlock(column){
// 		var myblock = 0;

// 		column.each(function(){
// 			thisHight = $(this).height();
// 			if(thisHight > myblock){
// 				myblock = thisHight;
// 			}
// 		});
// 		column.height(block);
// 	};
// 	heightBlock($(".row > div"))
// })

const cards = document.querySelectorAll('.q');
for (let i = 0; i < cards.length; i++) {

 	const card = cards[i];
 	card.addEventListener('mousemove',startRotate);
 	card.addEventListener('mouseout',stopRotate);
}

function startRotate(event){
	const cardItem = this.querySelector('.w');
	const halfHeight = cardItem.offsetHeight / 2;

	cardItem.style.transform = 'rotateX('+-(event.offsetY - halfHeight) / 7 + 'deg) rotateY(' + (event.offsetX - halfHeight) / 7 + 'deg)';
}

function stopRotate(event){
	const cardItem = this.querySelector('.w');
	cardItem.style.transform = 'rotate(0)';

	}


	