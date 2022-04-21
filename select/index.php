<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="address.js"></script>
    <script>
        let regionModule = (function() {
            const provinceSelector = '#province';
            const districtSelector = '#district';
            const wardSelector     = '#ward';
            
            const selectOption = {
                placeholder: "Select a option",
                // placeholder: {
                //     id: '-1', // the value of the option
                //     text: 'Select an option'
                // },
                allowClear: true,
                tags: true, // dynamically create new options
                // tokenSeparators: [',', ' ']
            }
            
            let districts = []; // Temporary save helps increase performance
            
            
            let init = function(address) {
                buildProvinceSelect(address);
                provinceChangeEvent(address);
                districtChangeEvent();
            };
            
            let buildProvinceSelect = function(address) {
                let options = '';
                $.each(address, function(index, province) {
                    options += `<option value="${province.id}">${province.name}</option>`;
                });
                $(provinceSelector).html(options);
                $(provinceSelector).select2(selectOption);
            };

            let provinceChangeEvent = function(address) {
                $(provinceSelector).change(function() {
                    let options = '';
                    $.each(address, (index, province) => {
                        if (province.id == $(this).val()) {
                            districts = province.districts;
                            $.each(districts, (index, district) => {
                                options += `<option value="${district.id}">${district.name}</option>`;
                            });
                        }
                    });
                    $(districtSelector).html(options);
                    $(districtSelector).select2(selectOption);
                });
            };

            let districtChangeEvent = function() {
                $(districtSelector).change(function() {
                    let options = '';
                    $.each(districts, (index, district) => {
                        if (district.id == $(this).val()) {
                            $.each(district.wards, (index, ward) => {
                                options += `<option value="${ward.id}">${ward.name}</option>`;
                            });
                        }
                    });
                    $(wardSelector).html(options);
                    $(wardSelector).select2(selectOption);
                });
            };

            return {
                init: init
            };
        })();
        
        $(document).ready(function(){
            regionModule.init(address);
            $('.js-example-basic-multiple').select2();
        });
    </script>
</head>
<body>

<select id="province" class="select2">
    <option></option>
</select>
<select id="district" class="select2">
    <option></option>
</select>
<select id="ward" class="select2">
    <option></option>
</select>

<select class="js-example-basic-multiple" name="states[]" multiple="multiple">
    <option value="AL">Alabama</option>
    <option value="WY">Wyoming</option>
</select>

</body>
</html>