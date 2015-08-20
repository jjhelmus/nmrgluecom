#! /usr/bin/env python

from __future__ import print_function

import os

SOURCE_PATH = './source'
DEST_PATH = './build'

with open('./include/jhelmus_header.html') as f:
    JHELMUS_HEADER = f.read()
with open('./include/jhelmus_footer.html') as f:
    JHELMUS_FOOTER = f.read()


def render_page(source, dest):
    """ Render a single webpage """

    print("Rendering:", source, "->", dest)

    # determine directive
    fin = open(source, 'rb')
    magic = fin.read(3)
    if magic == b'!!!':
        directive = fin.readline().strip()
    else:
        directive = None
    fin.seek(0)

    # open destination file for writing
    if not os.path.exists(os.path.dirname(dest)):
        os.makedirs(os.path.dirname(dest))
    fout = open(dest, 'wb')

    # render file
    if directive is None:
        fout.write(fin.read())
    elif directive == 'jhelmus':
        fout.write(JHELMUS_HEADER)
        fin.readline()
        fout.write(fin.read())
        fout.write(JHELMUS_FOOTER)
    else:
        print("Skipped", source)

    # close files
    fin.close()
    fout.close()
    return


def main():
    """ main """
    for path, dirs, files in os.walk(SOURCE_PATH):
        for f in files:
            source = os.path.join(path, f)
            dest = source.replace(SOURCE_PATH, DEST_PATH, 1)
            render_page(source, dest)


if __name__ == "__main__":
    main()
