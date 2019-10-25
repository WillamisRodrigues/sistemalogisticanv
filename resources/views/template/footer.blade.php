<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2019 Sistema de Logistica by Grupo Gracom. All rights reserved.</span>
    </footer>
    </div>
</div>
    <script type="b2b87a95708a162dfd393efc-text/javascript" src="{{asset('assets/js/vendor.js')}}"></script>
    <script type="b2b87a95708a162dfd393efc-text/javascript" src="{{asset('assets/js/bundle.js')}}"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="b2b87a95708a162dfd393efc-|49" defer=""></script>
    <script>
        @if(Session::has('message'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

</body>

</html>