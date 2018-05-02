function jsErrorTest() {
	doSomethingUndefined(); // eslint-disable-line no-undef
}

jQuery( window ).on( 'load', function() {
	setTimeout( jsErrorTest, 1000 );
});
