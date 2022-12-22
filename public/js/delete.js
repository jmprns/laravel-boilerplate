function deleteViaUrl(url){

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        showLoaderOnConfirm: true,
        allowOutsideClick: () => !Swal.isLoading(),
        backdrop: () => Swal.isLoading(),
        preConfirm: () => {
            return axios.delete(url)
              .then(response => {
                return response
              })
              .catch(error => {
                Swal.showValidationMessage(
                  `Request failed: ${error}`
                )
              })
          },
      }).then((result) => {

        const res = result.value

        if(result.isConfirmed) {
            Swal.fire({
                title: res.data.title ?? "Success",
                text: res.data.message ?? "Success",
                icon: "success",
                showCancelButton: false,
                confirmButtonText: "Ok.",
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    if ("intended" in res.data) {
                        window.location = res.data.intended;
                    }
                }
            });
        }

      })
}
