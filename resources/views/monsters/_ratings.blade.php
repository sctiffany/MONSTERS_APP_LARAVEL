<div class="mt-6">
    <h3 class="text-2xl font-bold mb-4">Évaluez ce Monstre</h3>
    <div id="rating-section" class="flex items-center">
        <span class="rating-star" data-value="1">&#9733;</span>
        <span class="rating-star" data-value="2">&#9733;</span>
        <span class="rating-star" data-value="3">&#9733;</span>
        <span class="rating-star" data-value="4">&#9733;</span>
        <span class="rating-star" data-value="5">&#9733;</span>
    </div>
</div>
<script>
    document.querySelectorAll(".rating-star").forEach((star) => {
        star.onclick = function() {
            let rating = this.getAttribute("data-value");
            document
                .querySelectorAll(".rating-star")
                .forEach((innerStar) => {
                    if (innerStar.getAttribute("data-value") <= rating) {
                        innerStar.classList.add("selected");
                    } else {
                        innerStar.classList.remove("selected");
                    }
                });
            // Envoyer la valeur 'rating' au serveur ou la traiter comme nécessaire
        };
    });
</script>
