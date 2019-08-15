var timelineItems = document.querySelectorAll('.timeline__item');

// Only adjust position & size if on desktop
var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if (w > 800) {
  desktopTimeline();
  timelineBackgroundColors();
}
else {
  timelineBackgroundColors();
}

function desktopTimeline() {
  // Get the timeline items, declare
  var timelineItemsContainerRect = document.querySelector('.timeline__items').getClientRects()[0];
  var itemLength, itemStart, unadjustedLeft, itemRect;
  var prevSingleItems = [];

  // Use data-start and data-end to set width and position of timeline events
  timelineItems.forEach(function(item, index) {
    itemLength = item.dataset.end - item.dataset.start + 1;

    // Make single-month events twice as big, for legibility.
    // Put on same line as other single-month events, and adjust positioning
    if (itemLength === 1) {
      item.style.width =  '16.67%'; // just hard-coded 2/12*100
      item.style.display = 'inline-block';

      // Since putting single-month items on same line, need to adjust spacing differently
      unadjustedLeft = (item.dataset.start - .5) / 12 * 100;
      item.style.left = unadjustedLeft - (16.67 * prevSingleItems.length) + '%';

      prevSingleItems.push(item);

      // Check to see if we've pushed the item out of its container. If so, fix it!
      itemRect = item.getClientRects()[0];
      if (itemRect.left < timelineItemsContainerRect.left) {
        item.style.position = 'absolute';
        item.style.left = '0';
        prevSingleItems.pop();
      }
      if (itemRect.right > timelineItemsContainerRect.right) {
        item.style.position = 'absolute';
        item.style.left = '';
        item.style.right = '0';
      }
    } // end case for single-month items
    else {
      item.style.width =  itemLength / 12 * 100 + '%';
      item.style.left = item.dataset.start / 12 * 100 + '%';
    }
  });
}

function timelineBackgroundColors() {
  var brandColors = ['#024263', '#8d4287', '#ff9208', '#d01d53', '#00a047', '#024263', '#8d4287', '#ff9208', '#d01d53', '#00a047', '#024263', '#8d4287', '#ff9208', '#d01d53', '#00a047'];

  timelineItems.forEach(function(item, index) {
    item.style.background = brandColors[index];
  });
}
