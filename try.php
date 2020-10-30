$("#okButton").click(function() 
            {

                newsList[currentIndex].name = $("#titleTextBox").val();
                newsList[currentIndex].content = $("#oneTextBox").val();
                newsList[currentIndex].price = $("#twoTextBox").val();
                newsList[currentIndex].Quantity = $("#threeTextBox").val();
                refreshNewsUI();
                $("#newsModal").modal("hide");

                $.ajax({
                        type: "put",
                        url: "/home/news",
                        data: newsList[currentIndex]
                    })
                    .then(function(e) {
                       
                    })


            })