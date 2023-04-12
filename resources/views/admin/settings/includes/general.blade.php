<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">General Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label for="site_name" class="control-label">Site Name</label>
                <input type="text" class="form-control" placeholder="Enter site name" id="site_name" name="site_name"
                    value="{{ config('settings.site_name') }}">
            </div>
            <div class="form-group">
                <label for="site_title" class="control-label">Site Title</label>
                <input type="email" class="form-control" placeholder="Enter Site Title"
                    id="site_title" name="site_title"
                    value="{{ config('settings.site_title') }}">
            </div>
            <div class="form-group">
                <label for="default_email_address" class="control-label">Default Email Address</label>
                <input type="email" class="form-control" placeholder="Enter store default email address"
                    id="default_email_address" name="default_email_address"
                    value="{{ config('settings.default_email_address') }}">
            </div>
            <div class="form-group">
                <label for="currency_code" class="control-label">Currency Code</label>
                <input type="text" class="form-control" placeholder="Enter store Currency Code" id="currency_code"
                    name="currency_code" value="{{ config('settings.currency_code') }}">
            </div>
            <div class="form-group">
                <label for="currency_symbol" class="control-label">Currency Symbol</label>
                <input type="text" class="form-control" placeholder="Enter store currency symbol" id="currency_symbol"
                    name="currency_symbol" value="{{ config('settings.currency_symbol') }}">
            </div>
            <div class="tile-footer">
                <div class="row d-print-none mt-2">
                    <div class="col-12 text-right">
                        <button class="btn btn-success" type="submit">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>