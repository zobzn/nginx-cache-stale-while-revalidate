# An example of setting up the SWR cache in nginx

SWR (Stale While Revalidate) basically means that client will receive cached version of a document even if it is expired (the cache itself is updated in the background).
This improves site speed in situations where actualidy of data is not strictly required.

In this simple example, nginx acts as a reverse proxy server before php fastcgi and caches its response.

See more in [nginx.conf](conf/nginx.conf)
