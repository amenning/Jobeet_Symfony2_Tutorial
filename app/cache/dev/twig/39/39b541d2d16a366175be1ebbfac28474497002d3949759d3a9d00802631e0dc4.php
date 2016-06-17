<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_3e31a06e77b291fd4f9e32cb3062335dad245b1e4180387f24ec53481503e349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ceed1d83bc88502a538f287ac5d4ff67970bab78bc7f02586c2f22b246146f0 = $this->env->getExtension("native_profiler");
        $__internal_4ceed1d83bc88502a538f287ac5d4ff67970bab78bc7f02586c2f22b246146f0->enter($__internal_4ceed1d83bc88502a538f287ac5d4ff67970bab78bc7f02586c2f22b246146f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ceed1d83bc88502a538f287ac5d4ff67970bab78bc7f02586c2f22b246146f0->leave($__internal_4ceed1d83bc88502a538f287ac5d4ff67970bab78bc7f02586c2f22b246146f0_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_a531df712cfc554722a3264e6bcdae31e837451070b04d36fb85ed735331b8e4 = $this->env->getExtension("native_profiler");
        $__internal_a531df712cfc554722a3264e6bcdae31e837451070b04d36fb85ed735331b8e4->enter($__internal_a531df712cfc554722a3264e6bcdae31e837451070b04d36fb85ed735331b8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_a531df712cfc554722a3264e6bcdae31e837451070b04d36fb85ed735331b8e4->leave($__internal_a531df712cfc554722a3264e6bcdae31e837451070b04d36fb85ed735331b8e4_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_887a579359baaebc09398828cb03d56499b60ebb6de4f319deee2398ea99ad79 = $this->env->getExtension("native_profiler");
        $__internal_887a579359baaebc09398828cb03d56499b60ebb6de4f319deee2398ea99ad79->enter($__internal_887a579359baaebc09398828cb03d56499b60ebb6de4f319deee2398ea99ad79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_887a579359baaebc09398828cb03d56499b60ebb6de4f319deee2398ea99ad79->leave($__internal_887a579359baaebc09398828cb03d56499b60ebb6de4f319deee2398ea99ad79_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_e5312a3b9db999c5a5851d54b881eceb0dab865efce7efbf021795ff3c5a428a = $this->env->getExtension("native_profiler");
        $__internal_e5312a3b9db999c5a5851d54b881eceb0dab865efce7efbf021795ff3c5a428a->enter($__internal_e5312a3b9db999c5a5851d54b881eceb0dab865efce7efbf021795ff3c5a428a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_e5312a3b9db999c5a5851d54b881eceb0dab865efce7efbf021795ff3c5a428a->leave($__internal_e5312a3b9db999c5a5851d54b881eceb0dab865efce7efbf021795ff3c5a428a_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_ee411d8ec78cae5add3aada41e31c19afad83d8b35e9f1749fec94fce2687fbc = $this->env->getExtension("native_profiler");
        $__internal_ee411d8ec78cae5add3aada41e31c19afad83d8b35e9f1749fec94fce2687fbc->enter($__internal_ee411d8ec78cae5add3aada41e31c19afad83d8b35e9f1749fec94fce2687fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_ee411d8ec78cae5add3aada41e31c19afad83d8b35e9f1749fec94fce2687fbc->leave($__internal_ee411d8ec78cae5add3aada41e31c19afad83d8b35e9f1749fec94fce2687fbc_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {# block classes are prepended with a container class #}*/
/* {% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}*/
/* */
/* {# identify a block role used by the page editor #}*/
/* {% block block_role %}container{% endblock %}*/
/* */
/* {# render container block #}*/
/* {% block block %}*/
/*     {% if decorator %}{{ decorator.pre|raw }}{% endif %}*/
/*     {% for child in block.children %}*/
/*         {% block block_child_render %}*/
/*             {{ sonata_block_render(child) }}*/
/*         {% endblock %}*/
/*     {% endfor %}*/
/*     {% if decorator %}{{ decorator.post|raw }}{% endif %}*/
/* {% endblock %}*/
/* */
