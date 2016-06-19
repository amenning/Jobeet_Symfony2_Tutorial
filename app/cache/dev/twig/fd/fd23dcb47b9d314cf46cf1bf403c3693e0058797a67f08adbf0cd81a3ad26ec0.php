<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b8693eb806b3b66d5de21741ec3597634f91b97306671084859ad7e5d4751996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86642b3566e41485b614ab326e39bf2186f640bd038a47c5f262958eba3c91c1 = $this->env->getExtension("native_profiler");
        $__internal_86642b3566e41485b614ab326e39bf2186f640bd038a47c5f262958eba3c91c1->enter($__internal_86642b3566e41485b614ab326e39bf2186f640bd038a47c5f262958eba3c91c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86642b3566e41485b614ab326e39bf2186f640bd038a47c5f262958eba3c91c1->leave($__internal_86642b3566e41485b614ab326e39bf2186f640bd038a47c5f262958eba3c91c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b8a3614b21c3c63344fc450be14a79712e6ef31cd11f41274cc20771c4d6e2c = $this->env->getExtension("native_profiler");
        $__internal_5b8a3614b21c3c63344fc450be14a79712e6ef31cd11f41274cc20771c4d6e2c->enter($__internal_5b8a3614b21c3c63344fc450be14a79712e6ef31cd11f41274cc20771c4d6e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b8a3614b21c3c63344fc450be14a79712e6ef31cd11f41274cc20771c4d6e2c->leave($__internal_5b8a3614b21c3c63344fc450be14a79712e6ef31cd11f41274cc20771c4d6e2c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_939334f763d0bf4414a43277b4de4220e3f66bfe5e05c61d20051ae9a00e3291 = $this->env->getExtension("native_profiler");
        $__internal_939334f763d0bf4414a43277b4de4220e3f66bfe5e05c61d20051ae9a00e3291->enter($__internal_939334f763d0bf4414a43277b4de4220e3f66bfe5e05c61d20051ae9a00e3291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_939334f763d0bf4414a43277b4de4220e3f66bfe5e05c61d20051ae9a00e3291->leave($__internal_939334f763d0bf4414a43277b4de4220e3f66bfe5e05c61d20051ae9a00e3291_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_324afc89b1397d62a5638b125c716e651f05dbed3ee6f83f6dc605b77cd40191 = $this->env->getExtension("native_profiler");
        $__internal_324afc89b1397d62a5638b125c716e651f05dbed3ee6f83f6dc605b77cd40191->enter($__internal_324afc89b1397d62a5638b125c716e651f05dbed3ee6f83f6dc605b77cd40191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_324afc89b1397d62a5638b125c716e651f05dbed3ee6f83f6dc605b77cd40191->leave($__internal_324afc89b1397d62a5638b125c716e651f05dbed3ee6f83f6dc605b77cd40191_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
