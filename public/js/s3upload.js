document.addEventListener('DOMContentLoaded',  function(event){
    s3upload.addEventListener('submit', async function(event){
        if(!pictureFile){
            return;
        }
        
        event.preventDefault();

        var inputs = JSON.parse(s3upload.dataset.s3inputs);
        var attributes = JSON.parse(s3upload.dataset.s3attributes);

        var data = new FormData();
        Object.entries(inputs).forEach(([index, value]) =>{
            data.append(index, value);
        })
        data.append("file", pictureFile.files[0]);
        var response = await fetch(attributes['action'], {
            method: attributes['method'],
            body: data
        })
        if(response.ok){
            console.log('s3 upload success');
            pictureFile.remove();
            s3upload.submit();
        }
    })
});
        