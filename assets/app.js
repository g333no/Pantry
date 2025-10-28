document.addEventListener('DOMContentLoaded', () => {

  function getColorInput() {
    return document.querySelector('input[name="prodotto[colore]"]') || document.getElementById('colorHidden') || document.querySelector('input[name="prodotto[color]"]');
  }

  const previewBtn = document.getElementById('colorPreviewBtn');
  const colorHexLabel = document.getElementById('colorHex');
  const colorGrid = document.getElementById('colorGrid');
  const grayGrid = document.getElementById('grayGrid');
  const palette = document.getElementById('colorPalette');
  const clearBtn = document.getElementById('clearColor');
  const closeBtn = document.getElementById('closePalette');

  function setColorValue(hex){
    const input = getColorInput();
    if (input) input.value = hex;
    if (previewBtn) previewBtn.style.background = hex;
    if (colorHexLabel) colorHexLabel.textContent = hex;
  }

  function onSwatchClick(e){
    const btn = e.target.closest('button');
    if (!btn) return;
    if (btn.classList.contains('swatch') || btn.classList.contains('gray-swatch')) {
      const hex = btn.getAttribute('data-color') || btn.title || btn.style.background;
      if (!hex) return;
      const prev = (btn.parentNode || document).querySelector('.selected');
      if (prev) prev.classList.remove('selected');
      btn.classList.add('selected');
      setColorValue(hex);
    }
  }

  if (colorGrid) colorGrid.addEventListener('click', onSwatchClick);
  if (grayGrid)  grayGrid.addEventListener('click', onSwatchClick);

  if (previewBtn) {
    previewBtn.addEventListener('click', function(e){
      e.stopPropagation();
      if (!palette) return;
      palette.style.display = (palette.style.display === 'block') ? 'none' : 'block';
    });
  }
  if (closeBtn) closeBtn.addEventListener('click', () => { if (palette) palette.style.display = 'none'; });
  if (clearBtn) clearBtn.addEventListener('click', () => { setColorValue('#ffffff'); if (palette) palette.style.display = 'none'; const sel = document.querySelector('.selected'); if (sel) sel.classList.remove('selected'); });

  (function initColorFromInput(){
    const input = getColorInput();
    const val = (input && input.value) ? input.value : (previewBtn ? previewBtn.style.background : '#ffffff');
    if (previewBtn) previewBtn.style.background = val;
    if (colorHexLabel) colorHexLabel.textContent = val;
    const all = Array.from(document.querySelectorAll('.swatch, .gray-swatch'));
    for (const s of all) {
      const c = (s.getAttribute('data-color') || '').toLowerCase();
      if (c && c === (val || '').toLowerCase()) { s.classList.add('selected'); break; }
    }
  })();

  document.addEventListener('click', function(e){
    if (palette && !palette.contains(e.target) && e.target !== previewBtn) palette.style.display = 'none';
  });

});
