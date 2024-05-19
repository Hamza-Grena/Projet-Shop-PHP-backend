$(document).ready(function () {

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // isotope filter
    var $productFilter = $(".product-filter").isotope({
        itemSelector: '.product-filter-item',
        layoutMode: 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $productFilter.isotope({ filter: filterValue });
    })


    // new pc owl carousel
   
    // blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
           }
        }
    })

    // are you sure to delete
    $(".btn-danger").click(function (event) {
        if (!confirm("Est ce que vous etes sur pour supprimer?")) {
            // Prevent default behavior of the button if user clicks "Cancel"
            event.preventDefault();
            return;
        }
    });

    // select all input type file
    var imgInputs = $('input[type="file"][accept="image/*"]');
    imgInputs.each(function () {
        $(this).change(function () {
            var img = $(this).get(0).files[0];
            if (img) {
                var reader = new FileReader();
                reader.onload = function () {
                    $(this).parent().find('img').attr("src", reader.result);
                }.bind(this);
                reader.readAsDataURL(img);
            }
        });
    });

    // insert product row
    $manageProductTable = $("#manage-product .table-data");
    $manageProductTableBtn = $("#manage-product .btn.addItem");
    $manageProductItems = $("#manage-product .table-data tr[data-id]").length;
    $manageProductTableBtn.on("click", function () {
        $manageProductItems++;
        var html =
            `<tr data-id="${$manageProductItems}">
                <td>
                    <input type="number" value="${$manageProductItems}" readonly name="id-${$manageProductItems}">
                </td>
                <td>
                    <input type="text" value="" name="name-${$manageProductItems}">
                </td>
                <td>
                <select name="brand-${$manageProductItems}">
                    <option value="1">MSI</option>
                    <option value="2">LENOVO</option>
                    <option value="3">DELL</option>
                    <option value="4">GIGABYTE</option>
                    <option value="5">HP</option>
                </select>
            </td>
                <td>
                    <input type="text" value="" disabled name="origin-${$manageProductItems}">
                </td>
                <td>
                    <input type="number" step="0.01" value="0.00" name="price-${$manageProductItems}">
                </td>
                <td>
                    <div class="preview-image">
                        <img src="#" alt="preview">
                        <input type="file" name="image-${$manageProductItems}" accept="image/*">
                    </div>
                </td>
                <td>
                    <button type="submit" name="manage-insert" formaction="manage.php?id=${$manageProductItems}"
                        class="btn btn-success">Insert</button>
                </td>
                <td>
                    <button type="submit" name="manage-delete" formaction="manage.php?id=${$manageProductItems}"
                        class="btn btn-danger">Delete</button>
                </td>
            </tr>`;
            console.log("Adding new row:", $manageProductItems);
        $manageProductRow = $("#manage-product .table-data tbody").get(0).insertRow(-1);
        $manageProductRow.innerHTML = html;
        //$("#manage-product .table-data tbody").append(html);
    });

    // insert product row
    $accMemberTable = $("#account-member .table-data");
    $accMemberTableBtn = $("#account-member .btn.addItem");
    $accMemberItems = $("#account-member .table-data tr[data-id]").length;
    $accMemberTableBtn.on("click", function () {
        $accMemberItems++;
        var html =
            `<tr data-id="${$accMemberItems}">
                <td>
                    <input type="number" value="${$accMemberItems}" readonly name="id-${$accMemberItems}">
                </td>
                <td>
                    <input type="text" value="" name="username-${$accMemberItems}" class="text-center">
                </td>
                <td>
                    <input type="text" value="" name="password-${$accMemberItems}" class="text-center">
                </td>
                <td>
                    <select name="privilege-1">
                        <option value="1">Admin</option>
                        <option value="0" selected>User</option>
                    </select>
                </td>
                <td>
                    <button type="submit" name="account-insert" formaction="account.php?id=${$accMemberItems}"
                        class="btn btn-success">Insert</button>
                </td>
                <td>
                    <button type="submit" name="account-delete" formaction="account.php?id=${$accMemberItems}"
                        class="btn btn-danger">Delete</button>
                </td>
            </tr>`;

        $accMemberRow = $("#account-member .table-data tbody").get(0).insertRow(-1);
        $accMemberRow.innerHTML = html;
    });

});
