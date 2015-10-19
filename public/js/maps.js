var maps = {
    start: function () {
        ymaps.route([
            $('#input-address-start').val(),
            $('#input-address-finish').val()
        ]).then(function (route) {
            var moveList = [],
                way,
                segments;
            for (var i = 0; i < route.getPaths().getLength(); i++) {
                way = route.getPaths().get(i);
                segments = way.getSegments();
                for (var j = 0; j < segments.length; j++) {
                    var street = segments[j].getStreet();
                    moveList.push('Едем ' + segments[j].getHumanAction() + (street ? ' на ' + street : '') + ', проезжаем ' + parseInt(segments[j].getLength()) + ' м.');
                }
            }
            // Выводим маршрутный лист.
            $('#list').append(moveList.join(', <br>'));
        }, function (error) {
            alert('Возникла ошибка: ' + error.message);
        });
    },

    init: function() {
        new ymaps.Map(false, {
            center: [55.745508, 37.435225],
            zoom: 13
        }, {
            searchControlProvider: 'yandex#search'
        });
    }
}
ymaps.ready(maps.init);