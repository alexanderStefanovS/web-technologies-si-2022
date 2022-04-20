
(() => {

    fetch('../../backend/api/get-all-subjects.php')
        .then(res => res.json())
        .then(data => {
            console.log(data);
        });

})();
