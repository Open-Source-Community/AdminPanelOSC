$(document).ready(function() {
    console.log("LL");
    // $(".js-example-tokenizer").select2();

    $(".js-example-tokenizer").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
});