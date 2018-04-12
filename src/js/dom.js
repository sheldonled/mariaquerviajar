
/**
 * Returns a Javascript array of DOM elements that match a query
 * @param {string} query - the query to be selected
 * @param {HTMLElement} container - the query to be selected
 * @returns {array} - an array of DOM elements or empty array
 */
const getNodeElements = (query, container) => {
    container = container || document;

    var domElements = container.querySelectorAll(query) || {};
    if (domElements instanceof NodeList)
        return Array.prototype.slice.call(domElements); //From NodeList to Array
    if (domElements instanceof HTMLElement)
        return [domElements];
    return [];
};

export default {getNodeElements};