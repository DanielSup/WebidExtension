class CountriesSellFormModule {
    constructor(shippingOptionsForSelect){
        this.shippingOptionsForSelect = shippingOptionsForSelect;
    }

    addCountry(id, value, order){
        let legendSelectedCountry = document.createElement('legend');
        legendSelectedCountry.innerText = value;
        legendSelectedCountry.setAttribute('class', 'legend-without-bottom-border');
        $('#country-definition-' + order).append(legendSelectedCountry);

        this.addShippingOption(order, 1);
    }

    handleChangeCountries(order){
        let that = this;
        $('#countries\\[' + order + '\\]\\[id\\]').change(function(){
            const selectedCountryId = $(this).children("option:selected").val();
            const selectedCountryName = $(this).children("option:selected").text();
            that.addCountry(selectedCountryId, selectedCountryName, order);
            if($('#countries\\[' + (order + 1) + '\\]\\[id\\]').length == 0) {
                that.addSelect(order + 1);
            }
        });
    }

    addSelect(order) {
        const divWithLabel = document.createElement('div');
        divWithLabel.setAttribute('class', 'form-group col-md-12 dutchhide');
        divWithLabel.setAttribute('id', 'country-definition-' + order);

        let label = document.createElement('label');
        label.innerText = 'Another country where you want to deliver the item';
        divWithLabel.appendChild(label);

        const countriesSelect = document.createElement('select');
        countriesSelect.setAttribute('class', 'form-control');
        countriesSelect.setAttribute('name', 'countries[' + order + '][id]');
        countriesSelect.setAttribute('id', 'countries[' + order + '][id]');
        const countriesSelectOptions = $('#countries\\[' + (order - 1) + '\\]\\[id\\] option:not(:selected)');
        countriesSelectOptions.appendTo(countriesSelect);

        let paragraph = document.createElement('p');
        paragraph.append(countriesSelect);
        divWithLabel.appendChild(paragraph);

        $('#countries-shipping-definition').append(divWithLabel);
        this.handleChangeCountries(order);
    }


    shippingOption(order, shippingOptionOrder){
        const shippingOptionFormGroup = document.createElement('div')
        shippingOptionFormGroup.setAttribute('class', 'form-group col-md-12 dutchhide');
        shippingOptionFormGroup.setAttribute('id', 'country-definition-' + order + '-shipping-option-' + shippingOptionOrder);

        const selectFormGroup = this.shippingOptionSelectFormGroup(order, shippingOptionOrder);
        shippingOptionFormGroup.append(selectFormGroup);

        return shippingOptionFormGroup;
    }

    addShippingOption(order, shippingOptionOrder) {
        const shippingOptionsFormGroup = this.shippingOption(order, shippingOptionOrder);
        $('#country-definition-' + order).append(shippingOptionsFormGroup);
        this.handleChangeShippingOption(order, shippingOptionOrder);
    }

    handleChangeShippingOption(order, shippingOptionOrder){
        const selectShippingOptionId = 'countries\\[' + order + '\\]\\[shipping-options\\]\\[' + shippingOptionOrder + '\\]\\[id\\]';

        let that = this;
        $('#' + selectShippingOptionId).one('change', function() {
            that.addFieldToShippingOptionFormGroup(order, shippingOptionOrder);

            that.addShippingOption(order, shippingOptionOrder + 1);
        });
    }

    addFieldToShippingOptionFormGroup(order, shippingOptionOrder){
        const shippingOptionFormGroupId = 'country-definition-' + order + '-shipping-option-' + shippingOptionOrder;
        const shippingOptionFormGroup = document.getElementById(shippingOptionFormGroupId);

        const shippingOptionFieldIdPrefix = 'countries[' + order + '][shipping-options][' + shippingOptionOrder + ']'

        const titleId = shippingOptionFieldIdPrefix + '[title]';
        const titleFormGroup = this.formGroupForField('Title', titleId, titleId, 'text');
        shippingOptionFormGroup.append(titleFormGroup);

        const shippingFirstItemId = shippingOptionFieldIdPrefix + '[shipping-for-first-item]';
        const shippingFirstItemFormGroup = this.formGroupForField('Shipping cost for first item', shippingFirstItemId, shippingFirstItemId, 'number');
        shippingOptionFormGroup.append(shippingFirstItemFormGroup);

        const shippingSecondItemId = shippingOptionFieldIdPrefix + '[shipping-for-second-item]';
        const shippingSecondItemFormGroup = this.formGroupForField('Shipping cost for second and further item', shippingSecondItemId, shippingSecondItemId, 'number');
        shippingOptionFormGroup.append(shippingSecondItemFormGroup);
    }

    shippingOptionSelectFormGroup(order, shippingOptionOrder){
        const shippingOptionSelectFormGroup = document.createElement('div')
        shippingOptionSelectFormGroup.setAttribute('class', 'form-group col-md-12 dutchhide');

        let label = document.createElement('label');
        label.innerText = 'Shipping option';
        shippingOptionSelectFormGroup.append(label);

        const elementForSelection = document.createElement('select');
        elementForSelection.setAttribute('class', 'form-control');
        elementForSelection.setAttribute('name', 'countries[' + order + '][shipping-options][' + shippingOptionOrder + '][id]');
        elementForSelection.setAttribute('id', 'countries[' + order + '][shipping-options][' + shippingOptionOrder + '][id]');

        if (shippingOptionOrder === 1) {
            elementForSelection.innerHTML = this.shippingOptionsForSelect;
        } else {
            const previousSelectCountryId = 'countries\\[' + order + '\\]\\[shipping-options\\]\\[' + (shippingOptionOrder - 1) + '\\]\\[id\\]';
            const options = $('#' + previousSelectCountryId + ' option:not(:selected)');
            options.appendTo(elementForSelection);
        }

        const divForSelection = document.createElement('div');
        divForSelection.append(elementForSelection);
        shippingOptionSelectFormGroup.append(divForSelection);

        return shippingOptionSelectFormGroup;
    }

    formGroupForField(labelText, id, name, fieldType) {
        const formGroup = document.createElement('div');
        formGroup.setAttribute('class', 'form-group col-md-12 dutchhide');

        let label = document.createElement('label');
        label.innerText = labelText;
        formGroup.appendChild(label);

        const elementForField = document.createElement('div');
        const field = document.createElement('input')
        field.setAttribute('class', 'form-control');
        field.setAttribute('type', fieldType);
        field.setAttribute('name', name);
        field.setAttribute('id', id);

        if (fieldType == 'number') {
            field.setAttribute('step', 'any');
        }

        elementForField.appendChild(field);
        formGroup.appendChild(elementForField);
        return formGroup;
    }

}

function removeShippingOptionForCountry(countryOrder, shippingOptionOrder){
    const currentFormGroupId = "country-definition-" +  countryOrder + "-shipping-option-" + shippingOptionOrder;
    $('#' + currentFormGroupId).remove();

    $('#country-definition-' + countryOrder + ' input, #country-definition-' + countryOrder + ' ' + 'select').each(function(){
        const id = $(this).attr("id");
        if (id.includes("[shipping-options]")) {
            const elementsFromId = id.split("[");
            const orderString = elementsFromId[3].replace("[", "");
            const order = parseInt(orderString);
            if (order > shippingOptionOrder) {
                const newId = id.replace("[shipping-options][" + order + "]", "[shipping-options][" + (order - 1) + "]");
                $(this).attr("id", newId);
                $(this).attr("name", newId);

                const formGroupId = "country-definition-" + countryOrder + "-shipping-option-" + order;
                const formGroupNewId = formGroupId.replace("shipping-option-" + order, "shipping-option-" + (order - 1));
                $("#" + formGroupId).attr("id", formGroupNewId);
            }
        }
    });
}