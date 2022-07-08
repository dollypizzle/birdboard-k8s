docker build -t dollypizzle/birdboard-app:latest -t dollypizzle/birdboard-app:$SHA -f "Dockerfile" .

docker push dollypizzle/birdboard-app:latest

docker push dollypizzle/birdboard-app:$SHA

kubectl apply -f k8s
kubectl set image deployments/birdboard-deployment birdboard=dollypizzle/birdboard-app:$SHA
