<div class="tab">
    <div id="tab-2" class="tab-contents">
        <div class="custom-form">
            <form method="POST" action="/customerRegister" enctype="multipart/form-data" class="main-register-form" id="main-register-form2">
                @csrf
                <label>Full Name <span class="text-danger">*</span></label>
                <input name="full_name" type="text" required="required" class="form-control">

                <label>Email <span class="text-danger">*</span></label>
                <input name="email" type="email" required="required" class="form-control">

                <label>Mobile <span class="text-danger">*</span></label>
                <input name="mobile" type="text" required="required" class="form-control">

                <label>Password <span class="text-danger">*</span></label>
                <input name="password" type="password" required="required" class="form-control">

                <label>Address <span class="text-danger">*</span></label>
                <textarea name="address" required="required" class="form-control"></textarea>

                <input name="role" type="number" required="required" value="3" class="form-control d-none">
                <button type="submit" class="log-submit-btn">Register</button>
            </form>
        </div>
    </div>
</div>