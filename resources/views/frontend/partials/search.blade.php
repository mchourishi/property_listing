
<!-- SEARCH SECTION -->

<section class="indigo darken-2 white-text center">
    <div class="container">
        <div class="row m-b-0">
            <div class="col s12">

                <form action="{{ route("property.search") }}" method="GET">

                    <div class="searchbar">
                        <div class="input-field col s12 m2">
                            <select name="bedroom" class="browser-default">
                                <option value="">No of Bedrooms</option>
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="bathroom" class="browser-default">
                                <option value="">No of Bathrooms</option>
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <input type="text" name="maxprice" id="maxprice" class="custominputbox">
                            <label for="maxprice">Max Price</label>
                        </div>

                        <div class="input-field col s12 m1">
                            <button class="btn btnsearch waves-effect waves-light w100" type="submit">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>
