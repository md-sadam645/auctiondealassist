<div id="tab-1" class="tab-contents">
    <div class="custom-form">
        <form method="POST" action="/customerLogin" name="registerform">
            @csrf
            <label>Username or Email Address <span class="text-danger">*</span> </label>
            <input name="email" type="email" required="required">
            <label>Password <span class="text-danger">*</span></label>
            <input name="password" type="password" required="required">
            <button type="submit" class="log-submit-btn">Log In</button>
            <div class="clearfix"></div>
            {{-- <div class="filter-tags">
                <input id="check-a" type="checkbox" name="check">
                <label for="check-a">Remember me</label>
            </div> --}}
        </form>
        <div class="lost_password">
            <a href="/forget-password">Forget Your Password?</a>
        </div>
    </div>
</div>