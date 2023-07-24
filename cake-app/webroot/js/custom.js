const erp_js = {
    unit_price: "#unit_price",
    qty: "#qty",
    cart_price: '#cart_price',
    total_amt: '#total_amt',
    paid_amt: '#paid_amt',
    remaining_amt: '#remaining_amt',

    transport_price: '#transport_price',
    staff_price: '#staff_price',
    gst: '#gst',
    gst_amount: '#gst_amount',
    init: function () {
        this.bindCalculateCartPrice();
        this.bindCalculateTotalPrice();
    },
    bindCalculateCartPrice: function () {
        let _self = this;
        //console.log(_self);
        // console.log($(_self.qty));
        // console.log($(_self.unit_price));

        $(_self.unit_price).on('change', function () {
            _self.calculatePrice();

        });
        $(_self.qty).on('change', function () {
            _self.calculatePrice();
        });
        $(_self.gst).on('change', function () {
            _self.calculatePrice();
        });
        $(_self.transport_price).on('change', function () {
            _self.calculatePrice();
        });
        $(_self.staff_price).on('change', function () {
            _self.calculatePrice();
        });
        $(_self.paid_amt).on('change', function () {
            _self.calculatePrice();
        });


    },

    calculatePrice: function () {
        let _self = this;
        let unit_price = $(_self.unit_price).val();
        let qty = $(_self.qty).val();
        let gst_percentage = $(_self.gst).val() != '' ? $(_self.gst).val() : 0;
        console.log('gst_percentage', gst_percentage);
        if (typeof unit_price != 'undefined' && typeof qty != 'undefined' && unit_price != '' && qty != '') {
            let inital_price = unit_price * qty;
            let gst_amount = parseFloat(gst_percentage * inital_price) / parseFloat(100);
            console.log('gst_amount', gst_amount);
            $(_self.gst_amount).html(gst_amount);
            $(_self.cart_price).val(inital_price);
            _self.bindCalculateTotalPrice();
        }





    },
    bindCalculateTotalPrice: function () {
        let _self = this;
        if ($(_self.cart_price).val() != '') {
            console.log('inside');
            $(_self.total_amt).val((parseFloat($(_self.cart_price).val()) + parseFloat($(_self.transport_price).val() != '' ? $(_self.transport_price).val() : 0) + parseFloat($(_self.staff_price).val() != '' ? $(_self.staff_price).val() : 0) + parseFloat($(_self.gst_amount).html() != '' ? $(_self.gst_amount).html() : 0)).toFixed(2))
            _self.bindCalculateRemainingAmount();
        }


    },
    bindCalculateRemainingAmount: function () {
        let _self = this;
        console.log("$(_self.total_amt).val()", $(_self.total_amt).val());
        console.log("$(_self.paid_amt).val()", $(_self.paid_amt).val());

        if (($(_self.total_amt).val() != '') && ($(_self.paid_amt).val() != '') && parseFloat($(_self.total_amt).val()) < parseFloat($(_self.paid_amt).val())) {
            console.log('gretareere')
            $(_self.paid_amt).val(0);
            $(_self.remaining_amt).val($(_self.paid_amt).val());
            return false;

        }
        if (($(_self.total_amt).val() != '') && ($(_self.paid_amt).val() != '')) {
            console.log('inside');
            $(_self.remaining_amt).val((parseFloat($(_self.total_amt).val()) - parseFloat($(_self.paid_amt).val())).toFixed(2));
        }


    },
}