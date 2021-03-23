gnu1:
	rdmd objective1.d
gnu2:
	rdmd objective2.d
gnu2a:
	rdmd objective2a.d
gnu3:
	rdmd objective3.d
# The following lines should be done in sequence to set up the environment
get:
	curl -fsS https://dlang.org/install.sh | bash -s dmd
source:
	source ~/dlang/dmd-2.096.0/activate
# Return your environment back to how it was with this line
stop:
	deactivate
clean:
	rm -rf *.o
