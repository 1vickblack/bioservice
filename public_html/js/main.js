[].map.call(document.querySelectorAll('[anim="ripple"]'), el=> {
    el.addEventListener('click',e => {
        e = e.touches ? e.touches[0] : e;
        const r = el.getBoundingClientRect(), d = Math.sqrt(Math.pow(r.width,2)+Math.pow(r.height,2)) * 2;
        el.style.cssText = `--s: 0; --o: 1;`;  el.offsetTop; 
        el.style.cssText = `--t: 1; --o: 0; --d: ${d}; --x:${e.clientX - r.left}; --y:${e.clientY - r.top};`
    })
})

//TOTOP
function toggleTotop() {
	var height = jQuery(this).scrollTop(),
		totop = jQuery('#totop');

	if (height > 0) {
		totop.animate({
			opacity: 1
		}, {
			duration: 320,
			queue: false
		});
	} else if (height === 0) {
		totop.animate({
			opacity: 0
		}, {
			duration: 320,
			queue: false,
			complete: function () {
				totop.css('opacity', 0);
			}
		});
	}
}
jQuery('#totop').click(function () {
	jQuery('html, body').animate({
		scrollTop: 0
	}, 1000);

	return false;
});
toggleTotop();
jQuery(window).scroll(function () {
	toggleTotop();
});