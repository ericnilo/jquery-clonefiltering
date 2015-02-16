<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Clone Filtering Test</title>
</head>
<body id="main_container">

    <ul id="sorter">
        <li data-sort-field="id">ID</li>
        <li data-sort-field="fname">First Name</li>
        <li data-sort-field="lname">Last Name</li>
    </ul>

    <input type="text" class="search" placeholder="search">
    <button type="button" class="search_btn">Search</button>
    <ul id="container">
    </ul>

    <button id="load_more_btn">Load More</button>

    <ul style="display: none;" data-template-for="#container">
        <li class="employee-list" data-id="2" data-template="employee-list">
            <div data-view-type="view">
                <p data-view-field="first_name">Emil</p>
                <p data-view-field="mi">S.</p>
                <p data-view-field="last_name">Nilo</p>
            </div>
            <div data-view-type="edit">
                <form data-class-field="edit_form">
                    <input type="hidden" data-input-field="id" name="id" value="2">
                    <input type="text" data-input-field="first_name" name="first_name" value="Emil" placeholder="First Name">
                    <input type="text" data-input-field="mi" name="mi" value="S." placeholder="Middle Initial">
                    <input type="text" data-input-field="last_name" name="last_name" value="Nilo" placeholder="Last Name">
                </form>
            </div>
        </li>
    </ul>
</body>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/cloneFiltering.js"></script>
<script>
    $(function () {
        $('#main_container').cloneFiltering({
            url      : 'ajax/get_employee_list.php',
            container: '#container',
            template : '[data-template="employee-list"]',
            search   : {
                input: {
                    selector: 'input.search'
                },
                btn  : 'button.search_btn'
            },
            loadMore : '#load_more_btn',
            sort     : {
                selector: '#sorter'
            },
            csrfToken: {
                name : 'my_token',
                value: 'x5925626lsd62'
            }
        })
    });
</script>
</html>