### The Front Controller:
* As in core php, URL doesn't match directly to an individual php script
* All requests are sent through one page
* This is called the Front Controller
  * Provides central entry point for all requests
  * Handles everything common to every request, such as session handling etc.
  * The request is in the query string
    * Query string is a part of the URL that comes after the first question mark
    * We can use this to decide where to route the request (i.e. which controller)
    * The entire query string will be the request URL or route

#### The Router
* Takes the request url or route and decides what to do with it (which controller and action to run based on the route)
* Contains a table that matches routes to controllers and actions. This is called the routing table.