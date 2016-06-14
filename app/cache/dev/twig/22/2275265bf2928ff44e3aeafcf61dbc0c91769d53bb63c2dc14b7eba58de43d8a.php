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
        $__internal_d6d8d06419ccc982d31d443109a426efbf236d3c43e00af7f16d34e67b7cb83b = $this->env->getExtension("native_profiler");
        $__internal_d6d8d06419ccc982d31d443109a426efbf236d3c43e00af7f16d34e67b7cb83b->enter($__internal_d6d8d06419ccc982d31d443109a426efbf236d3c43e00af7f16d34e67b7cb83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d8d06419ccc982d31d443109a426efbf236d3c43e00af7f16d34e67b7cb83b->leave($__internal_d6d8d06419ccc982d31d443109a426efbf236d3c43e00af7f16d34e67b7cb83b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed77bbb7458fb2df0b26dd9f19e3a0896f75b565df6c055fe7a06e599c545064 = $this->env->getExtension("native_profiler");
        $__internal_ed77bbb7458fb2df0b26dd9f19e3a0896f75b565df6c055fe7a06e599c545064->enter($__internal_ed77bbb7458fb2df0b26dd9f19e3a0896f75b565df6c055fe7a06e599c545064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed77bbb7458fb2df0b26dd9f19e3a0896f75b565df6c055fe7a06e599c545064->leave($__internal_ed77bbb7458fb2df0b26dd9f19e3a0896f75b565df6c055fe7a06e599c545064_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_097596ff76e306fe8aaada0aff28388574b8935fc8b8534c1973f0b7a559144c = $this->env->getExtension("native_profiler");
        $__internal_097596ff76e306fe8aaada0aff28388574b8935fc8b8534c1973f0b7a559144c->enter($__internal_097596ff76e306fe8aaada0aff28388574b8935fc8b8534c1973f0b7a559144c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_097596ff76e306fe8aaada0aff28388574b8935fc8b8534c1973f0b7a559144c->leave($__internal_097596ff76e306fe8aaada0aff28388574b8935fc8b8534c1973f0b7a559144c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b3f793e1720f5f91891d8248543542885e1be337ee5b7a2e4c628099b601d05 = $this->env->getExtension("native_profiler");
        $__internal_9b3f793e1720f5f91891d8248543542885e1be337ee5b7a2e4c628099b601d05->enter($__internal_9b3f793e1720f5f91891d8248543542885e1be337ee5b7a2e4c628099b601d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9b3f793e1720f5f91891d8248543542885e1be337ee5b7a2e4c628099b601d05->leave($__internal_9b3f793e1720f5f91891d8248543542885e1be337ee5b7a2e4c628099b601d05_prof);

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
