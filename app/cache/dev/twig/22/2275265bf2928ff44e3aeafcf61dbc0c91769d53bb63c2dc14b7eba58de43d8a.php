<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54234b1ebe8ce7d3a7dcbfcc334e52a20ee570d2a1127c371b232407937f69c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5d0e25ff88bdb28f4a1d6bff86de89f1633dac183074d6cce1314c2baf2e257 = $this->env->getExtension("native_profiler");
        $__internal_d5d0e25ff88bdb28f4a1d6bff86de89f1633dac183074d6cce1314c2baf2e257->enter($__internal_d5d0e25ff88bdb28f4a1d6bff86de89f1633dac183074d6cce1314c2baf2e257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d0e25ff88bdb28f4a1d6bff86de89f1633dac183074d6cce1314c2baf2e257->leave($__internal_d5d0e25ff88bdb28f4a1d6bff86de89f1633dac183074d6cce1314c2baf2e257_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1cf623a00ce6ce6380c1b8caf646de44081aa58c01cec371fb52f4b62ea9e06 = $this->env->getExtension("native_profiler");
        $__internal_c1cf623a00ce6ce6380c1b8caf646de44081aa58c01cec371fb52f4b62ea9e06->enter($__internal_c1cf623a00ce6ce6380c1b8caf646de44081aa58c01cec371fb52f4b62ea9e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c1cf623a00ce6ce6380c1b8caf646de44081aa58c01cec371fb52f4b62ea9e06->leave($__internal_c1cf623a00ce6ce6380c1b8caf646de44081aa58c01cec371fb52f4b62ea9e06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfaa3c32fc8f42e41ca88b5cf0b587633688e18610e66e06d5358707d1ee4787 = $this->env->getExtension("native_profiler");
        $__internal_cfaa3c32fc8f42e41ca88b5cf0b587633688e18610e66e06d5358707d1ee4787->enter($__internal_cfaa3c32fc8f42e41ca88b5cf0b587633688e18610e66e06d5358707d1ee4787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfaa3c32fc8f42e41ca88b5cf0b587633688e18610e66e06d5358707d1ee4787->leave($__internal_cfaa3c32fc8f42e41ca88b5cf0b587633688e18610e66e06d5358707d1ee4787_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b18b0960e60403d8b30026da740350bffc3e4b66d868b0366293d5cf82885179 = $this->env->getExtension("native_profiler");
        $__internal_b18b0960e60403d8b30026da740350bffc3e4b66d868b0366293d5cf82885179->enter($__internal_b18b0960e60403d8b30026da740350bffc3e4b66d868b0366293d5cf82885179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b18b0960e60403d8b30026da740350bffc3e4b66d868b0366293d5cf82885179->leave($__internal_b18b0960e60403d8b30026da740350bffc3e4b66d868b0366293d5cf82885179_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
