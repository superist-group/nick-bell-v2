function getHubspotFields(data) {
  return Object.entries(data)
    .map(([name, value]) => {
      if (!name || !value || (Array.isArray(value) && !value.length)) {
        /* Filter null values from any given form */
        return false;
      }

      return {
        objectTypeId: "0-1",
        name,
        value,
      };
    })
    .filter(Boolean);
}

function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop()?.split(";").shift();
  return "";
}

window["getHubspotFields"] = getHubspotFields;
window["getCookie"] = getCookie;
