{!! Form::open(['action' => 'SearchController@post', 'class' => 'search-field form-control', 'method' => 'post']) !!}
    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
    <input type="text" id="search-input" name="text">
    <label for="search-input">Search</label>
</form>