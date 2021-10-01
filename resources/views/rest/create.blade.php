<form action="/public/rest" method="post">
  @csrf
  <table>
    <tr><th>message:</th><td><input type="text" name="message" id="" value="{{old('message')}}"></td></tr>
    <tr><th>url:</th><td><input type="text" name="url" id="" value="{{old('url')}}"></td></tr>
    <tr><th><input type="submit" value="send"></th></tr>
  </table>
</form>
