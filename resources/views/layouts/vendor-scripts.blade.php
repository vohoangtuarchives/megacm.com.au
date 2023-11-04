@livewireScripts
<script>
    var JS_INLINE = JS_INLINE || {};
    let Js = {
        'libs' : {
            'toastify' : 'https://cdn.jsdelivr.net/npm/toastify-js',
            'choices' : '{{ URL::asset('assets/libs/choices.js/choices.js.min.js') }}',
            'flatpickr':'{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}'
        }
    };
</script>
@foreach([
    "assets/libs/simplebar/simplebar.min.js",
    "assets/libs/node-waves/node-waves.min.js",
    "assets/libs/feather-icons/feather-icons.min.js",
    "assets/js/pages/plugins/lord-icon-2.1.0.min.js",
    'assets/js/plugins.min.js',
] as $script)
<script src="{{ URL::asset($script) }}"></script>
@endforeach


@yield('script')
@yield('script-bottom')
@stack("js")

<script>
    var HTTP_GET = 'get';
    var HTTP_POST = 'post';
    var HTTP_PUT = 'put';
    var HTTP_DELETE = 'delete';
    function http(method, url, data){
        try {
            return axios({
                method: method,
                url: url,
                data: data
            })
        } catch (error) {
            console.log(method, url, data, error)
        }
    }

    function httpGet(url, data){
        return http(HTTP_GET, url, data);
    }
    function httpPost(url, data){
        return http(HTTP_POST, url, data);
    }
    function httpPut(url, data){
        return http(HTTP_PUT, url, data);
    }
    function httpDelete(url, data){
        return http(HTTP_DELETE, url, data);
    }
    /*
    Show modal which have element id
     */
    function showModal(idName){
        let myModal = new bootstrap.Modal(document.getElementById(idName), {
            keyboard: false
        });
        myModal.show();
    }

    function replaceHTMLContent(newContent, targetIdName){
        document.getElementById(targetIdName).innerHTML = newContent;
    }

    function showSwalConfirm(questionMsg, confirmMsg = "Yes", type = 'warning'){
        Swal.fire({
            title: questionMsg,
            icon: type,
            showCancelButton: true,
            confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
            cancelButtonClass: 'btn btn-danger w-xs mt-2',
            confirmButtonText: confirmMsg,
            buttonsStyling: false,
            showCloseButton: true
        }).then(function (result) {
            return result.value;
        });
        return false;
    }

    function showSwalWarning(msg){
        Swal.fire({
            title: msg,
            confirmButtonClass: 'btn btn-info',
            buttonsStyling: false,
            showCloseButton: true
        });
    }


</script>