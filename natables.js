function deviceMotionHandler(eventData) {
    var info, xyz = "[X, Y, Z, abs]";
    // Grab the acceleration from the results
    var acceleration = eventData.acceleration;
    var ax = acceleration.x;
    var ay = acceleration.y;
    var az = acceleration.z;

    var abs = Math.sqrt(ax * ax + ay * ay + az * az);

    info = xyz.replace("X", ax.toFixed(3));
    info = info.replace("Y", ay.toFixed(3));
    info = info.replace("Z", az.toFixed(3));
    info = info.replace("abs", abs)
    
    if (abs > 2) {
        document.getElementById("moAccel").innerHTML = "shake";
        angular.element($("#myGC")).scope().rnd();
        angular.element($("#myGC")).scope().$apply();
    }
    else
    {
        angular.element($("#myGC")).scope().rnd();
        document.getElementById("moAccel").innerHTML = "calm"; 
    }
}

if (window.DeviceOrientationEvent) {
    //document.write("ok");
    window.addEventListener('devicemotion', deviceMotionHandler, false);
}

function rndint(r) {
    return Math.floor(Math.random()*r);
}

function GreetingController($scope){
    $scope.greeting = 'Hola!';
    $scope.tables = {};
    $scope.guests = ["Татьяна Евдокимовна","Надежда Степановна","Чешаевы Андрей","Чешаевы Ольга","Чешаевы Марина","Чешаевы Саша","Василий Степанович","Инна Захаровна","Дудина Ангелина","Дудин Владимир","Дудин Коля","Дудина Соня","Татьяна","Валентин","Шевчик Катя","Шевчик Ваня","Владимир Степанович","Наталья Александровна","Ида Викторовна","Низамов Александр","Низамова Елена","Низамов Вова","Шевчик Анна","Шевчик Максим","Казакевич Ирина Александровна","Казакевич Владимир Андреевич","Маша","Александра Евдокимовна","Шевцов Юрий","Шевцова Оксана","Шевцов Сергей","Шевцова Татьяна","Шевцова Алена","Шевцова Вероника","Анна Евдокимовна","Кондырев Андрей","Кондырева Галина","Кондырев Олег","Кондырева Наталья","Любовь Евдокимовна","Осеева Оксана","Осеев Денис","Навалихин Эдик","Помазкина Валентина Демьяновна","Помазкин Виктор Васильевич","Помазкина Алена","Помазкин Сергей","Помазкина Вера","Помазкина Маша","Колесникова Лидия Демьяновна","Колесников Александр Михайловна","Шевчик Галина","Зотов Надежда Васильевна","Зотов Сергей","Зотова Елена","Томашук Владимир Иванович","Томашук Ирина","Котюх Василий Яковлевич","Котюх Тамара Борисовна","Нина Митрофановна","Любовь Васильевна","Валентина Николаевна","Елена Войнова","Огаркова Мария","Огарков Владимир","Огарков Эдуард","Подруга Эдуарда","Бычков Иван Кириллович","Бычкова Зинаида Дмитриевна"];
    $scope.gs = [];
    $scope.alert = function () {
        alert("RRRRRR");
    }
    $scope.rnd = function () {
        $scope.greeting = 'Yes!';
        $scope.gs = [];
        var clguests = $scope.guests.slice(0);
        var curi = 0;
        for (var i =  2; i >= 0; i--) {
            curi = rndint(clguests.length);
            $scope.gs.push(clguests[curi]);
            clguests.slice(curi, 1);
        };
        //$scope.$apply(function() { });
    }
    //$scope.rnd();
    //
}
$(function () {
//angular.element($("#myGC")).scope().alert();    
})
