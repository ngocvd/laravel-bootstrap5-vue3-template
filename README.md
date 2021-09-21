Đây là Project đã tích hợp bootstrap 5, vue 3, Laravel 8.
Bạn có thể thay đổi bằng bootswatch.

Có 3 cách dùng vue:
1. Sử dụng webpack (mix).
- Cách này như chương trình biên dịch.
- Không tận dụng được web động như php, asp.net.
2. Sử dụng js hoàn toàn:
- Không sử dụng webpack.
- Viết động, nhưng không tận dụng sức mạnh webpack (khi bản phân phối chưa minify)
3. Lai giữa 2 cách trên.
```
//Trong file blade:
@section('custom_js')
<script>
    var myMixin = {
        data() {
            return {
                style: 'info'
            }
        },
        methods: {
            hello: function() {
                console.log('hello from mixin!')
            },
            canhbao: function() {
                alert("cảnh báo");
            },
        }
    }
</script>
@endsection

//Sử dụng mix để đóng gói app.js
<script src="{{ asset('js/app.js') }}"></script>

//app.js có đoạn:

const app = createApp({
    mixins: [myMixin],
    components: {
        StarRating,
        ScrollToTop,
    },
    methods: {

```
Cách sử dụng nào hay thì tuỳ bạn sử dụng.
Mình thấy cách lai này tận dụng cả blade để viết web.
Source demo như trên.
