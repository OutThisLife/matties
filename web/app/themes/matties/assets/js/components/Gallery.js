const $gallery = document.getElementById('gallery')

Array.from(document.getElementsByClassName('toggle-gallery')).forEach($a => {
	$a.addEventListener('click', e => {
		e.preventDefault()
		e.stopPropagation()

		$gallery.classList.toggle('open')
	})
})

$gallery.querySelector('.cover').addEventListener('click', () => $gallery.classList.remove('open'))
