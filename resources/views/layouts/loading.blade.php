<div class="modload">
</div>
<style>
    .modload {
        display: none;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(255, 255, 255, 0.616) url("{{ asset('loading-gif-1.gif') }}") 50% 50% no-repeat;
        background-size: 50px;
    }
    body.loading .modload {
        overflow: hidden;
    }

    body.loading .modload {
        display: block;
    }
</style>
<script>
    $body = $("body");
    $(document).ajaxStart(function() {
        $body.addClass("loading");
    });
    $(document).ajaxComplete(function() {
        $body.removeClass("loading");
    });
</script>
