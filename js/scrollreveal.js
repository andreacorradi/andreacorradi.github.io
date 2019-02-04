// only for reference, it's embedded as object into scripts.js

;(function() {

  var thresholds = []
  const tolerance = 40
  var offsetFirst = 0
  const offsetStep = 166 // 2 * <hr> height + div.process-line height

  var processLines = [].slice.call(document.querySelectorAll(".process-line"))

  //calcola distanza di elemento da top di window
  function getElemDistance(elem) {
    var location = 0
    if (elem.offsetParent) {
      do {
        location += elem.offsetTop
        elem = elem.offsetParent
      } while (elem)
    }
    return location >= 0 ? location : 0
  }

  //somma due elementi
  function getSum(total, num) {
    return total + num
  }

  //ritorna true se x è compreso fra th-tol e th+tol
  function inRange(x, th, tol) {
    return ((x-th+tol)*(x-th-tol) <= 0)
  }

  function lineHideAll() {
    processLines.forEach(l => {
      if (l.classList.contains("open")) l.classList.remove("open")
    })
  }

  function processSetup() {
    window.scrollTo(0, 0)
    offsetFirst = getElemDistance(document.querySelector(".process-item")) - window.innerHeight
    //offsetStep = document.querySelector(".process-item").height + document.querySelector("hr").height
    lineHideAll()
    thresholds = setupThresholds()
  }

  function setupThresholds() {
    let relDist = []
    let sumPrec = 0
    let steps = [].slice.call(document.querySelectorAll(".one_half.last > .process-item"))
    steps.forEach((s, i) => {
      if (i===0) relDist.push(s.clientHeight)
      else relDist.push(relDist[i-1] + s.clientHeight + offsetStep)
    })
    let absDist = relDist.map(el => el + offsetFirst)
    absDist.splice(-1,1)
    return absDist
  }

  processSetup()

  window.addEventListener('scroll', function() {
    if (pageYOffset===0) lineHideAll()
    thresholds.forEach(function(t, i){
      //console.log(pageYOffset, inRange(pageYOffset, t, tolerance))
      if (inRange(pageYOffset, t, tolerance)) {
        if(!processLines[i].classList.contains("open")) {
          document.querySelector("[data-step='datastep" + (i+1) + "']").classList.add("open")
        }
      }
    })

  })

})()