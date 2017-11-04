module ProcessCode
    def self.process(site, payload)
        require 'pp'

        composer_present = File.exist?("#{site.source}/vendor/autoload.php")

        Dir.glob("#{site.source}/_posts/snippets/*.php") do |snippet|
            file_name = File.basename(snippet)
            output    = "#{site.source}/_includes/code/#{file_name}.out"

            if (composer_present)
                codes     = File.read(snippet).sub(/^<\?php/, '')
                content   = `php -r 'require "#{site.source}/vendor/autoload.php"; #{codes}'`
            else
                content = `php #{snippet}`
            end

            File.write(output, content)
        end
    end
end

Jekyll::Hooks.register :site, :pre_render do |site, payload|
  ProcessCode.process(site, payload)
end
